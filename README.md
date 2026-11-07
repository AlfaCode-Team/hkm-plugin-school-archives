# hkm-plugin-school-archives

> Solves **`school.archives`** · namespace **`Plugins\SchoolArchives\`** · on-demand GDA module
> Family: Elimu / school domain

Scheduled and manual archival of people and academic records, and reading the archives back.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolArchivesContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `admin_AutoArchive.php, admin_MainArchive.php, admin_archives.php, auto_archive_schedules, bulletin/_archive_scope.php` |
| Legacy tables | `auto_archive_schedules, auto_archive_log` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `audit.trail`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.archives"] }
```

```php
$svc = $container->make(\Plugins\SchoolArchives\API\Contracts\SchoolArchivesContract::class);
```

## Installing

```bash
hkm plugins enable SchoolArchives <project>
```
