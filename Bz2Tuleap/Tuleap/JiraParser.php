<?php

namespace Bz2Tuleap\Tuleap;

use SimpleXMLElement;

class JiraParser implements ForeignParserInterface
{

    private $field_mapper;

    /**
     * @var JiraUserMapper
     */
    private $user_mapper;
    private $fields;

    public function __construct(JiraUserMapper $user_mapper)
    {
        $this->field_mapper = new IdMapper('F');
        $this->user_mapper  = $user_mapper;
    }

    public function getTrackerFromBugzilla(SimpleXMLElement $bugzilla_xml)
    {
        $this->fields = array(
            'summary' => new Field(
                $this->field_mapper, 'string', 'summary', 'Summary', new Properties(array('size' => 61)), new DefaultFieldPermissions()
            ),
            'description'=> new Field(
                $this->field_mapper, 'text', 'description', 'Description', new Properties(array('rows' => 7, 'cols' => 80)), new DefaultFieldPermissions()
            ),
        );

        return new Tracker(
            $this->getFields(),
            $this->getReportColumns(),
            $this->getSemantics(),
            new Rules(new ListRules([])),
            $this->getArtifacts($bugzilla_xml)
        );
    }

    private function getFields() {
        return new FormElements(
            [
                $this->fields['summary'],
                new Column(
                    $this->field_mapper,
                    [
                        new FieldSet($this->field_mapper, 'Details', [
                            new Column($this->field_mapper, []),
                            new Column($this->field_mapper, []),
                        ]),
                        new FieldSet($this->field_mapper, 'Description', [
                            $this->fields['description']
                        ])
                    ]
                ),
                new Column(
                    $this->field_mapper,
                    [
                        new FieldSet($this->field_mapper, 'People', []),
                        new FieldSet($this->field_mapper, 'Dates', []),
                    ]
                )
            ]
        );
    }

    private function getSemantics() {
        return array(
            new TitleSemantic($this->fields['summary']),
            new DescriptionSemantic($this->fields['description'])
        );
    }

    private function getReportColumns() {
        return array(
            $this->fields['summary'],
        );
    }

    private function getArtifacts(SimpleXMLElement $jira_xml) {
        $artifacts = array();
        foreach($jira_xml->channel->item as $jira_issue) {
            $files = new FilesData([]);
            $artifacts[] = new Artifact(
                (int) $jira_issue->key['id'],
                $this->getChangesets($jira_issue, $files),
                $files
            );
        }
        return $artifacts;
    }

    private function getChangesets(SimpleXMLElement $jira_issue, FilesData $files) {
        $changeset = array($this->getInitialChangeset($jira_issue));
        return array_merge($changeset, $this->getChangesetComments($jira_issue, $files));
    }

    private function getInitialChangeset(SimpleXMLElement $jira_issue) {
        return new Changeset(
            (string)$jira_issue->created,
            (string)$this->user_mapper->getUserFromReporter($jira_issue->reporter),
            '',
            Comment::HTML,
            $this->getFieldsData($jira_issue)
        );
    }

    private function getChangesetComments(SimpleXMLElement $jira_issue, FilesData $files) {
        $changesets = array();
        if (! isset($jira_issue->comments)) {
            return [];
        }
        foreach($jira_issue->comments->comment as $comment) {
            $changesets[] = new Changeset(
                (string)$comment['created'],
                (string)$this->user_mapper->getUserFromComment($comment),
                (string) $comment,
                Comment::HTML,
                []
            );
        }
        return $changesets;
    }

    private function getFieldsData(SimpleXMLElement $jira_issue) {
        $values = array(
            new ScalarFieldChange('summary', 'string', (string) $jira_issue->summary),
            new TextFieldChange('description', 'text', (string) $jira_issue->description, TextFieldChange::HTML),
        );

        return $values;
    }
}