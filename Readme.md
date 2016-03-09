Converter from Bugzilla to tuleap
=================================

Convert any XML export obtained from bugzilla into a Tuleap compatible archive
- Manage users (requires you to be authenticated when doing XML export)
- Manage one or several bugs (query)
- Fields imported
  - Title
  - Bugzilla ID
  - Priority
  - Severity
  - Status
  - Submitted by
  - Submitted on
  - Last update by
  - Last update on
- Import comments with authors and dates

Not covered:
- Import of changes

How to use it
-------------

    $> php converter.php /path/to/bugzilla.xml target_directory

Then you should import `target_directory` following Tuleap process.

Was tested and developed against Eclipse Bugzilla as of version 4.4.7.