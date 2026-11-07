<?php

declare(strict_types=1);

namespace Plugins\SchoolArchives\API\Contracts;

/**
 * Published contract for `school.archives`.
 *
 * Scheduled and manual archival of people and academic records, and reading the archives back.
 *
 * Legacy source : admin_AutoArchive.php, admin_MainArchive.php, admin_archives.php, auto_archive_schedules, bulletin/_archive_scope.php
 * Legacy tables : auto_archive_schedules, auto_archive_log
 *
 * Consumers declare `"requires": ["school.archives"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolArchivesContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
