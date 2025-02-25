# Changelog

All notable changes to `twill` will be documented in this file.

## 3.0.0-rc3

This is the third (and should be last) release candidate for Twill 3!

### Notable changes

- Twill now uses Tiptap wysiwyg editor by default. If you wish to use quill you will need to update fields to use that specifically. [`#2080`](https://github.com/area17/twill/pull/2080)

### Features

- Twill now uses Tiptap by default, Tiptap has been upgrade to version 2 and now has a link button that also supports browsers. [`#2080`](https://github.com/area17/twill/pull/2080)
  - The default config for the editor has been exanded to all features it supports
- The new settings are now translatable [`#2094`](https://github.com/area17/twill/pull/2094)
- SkipCreateModal now supports the table builder correctly [`#2087`](https://github.com/area17/twill/pull/2087)
- Adds the ability to show user activity on the dashboard [`#2063`](https://github.com/area17/twill/pull/2063)

### Bugfixes

- Fixed settings accessor when used with nested blocks or repeaters.
- Fixed a check so that the media library button gets disabled correctly.
- Fixes browser endpoints no longer crash when no edit url could be build.
- Various fixes for block components.

### Other

- Vue/node has been upgrade to use all of the latest versions [`#2070`](https://github.com/area17/twill/pull/2070)

## 3.0.0-rc2

This is the second release candidate for Twill 3!

### Features

- From builder now supports inline fieldsets [`#2007`](https://github.com/area17/twill/pull/2007)
- Blocks can now be defined as a blade component `php twill:make:componentBlock blockName` [`#2007`](https://github.com/area17/twill/pull/2007)

### Bugfixes

- Fixed an issue where media tags would not save [`#2051`](https://github.com/area17/twill/pull/2051)
- Fixed an issue where conditional fields would not unset [`#2043`](https://github.com/area17/twill/pull/2043)
- Vselect now properly handles floats [`#2048`](https://github.com/area17/twill/pull/2048)
- Repeaters now properly collapse/expand [`#2037`](https://github.com/area17/twill/pull/2037)

### Docs

- Various docs updated [`#2052`](https://github.com/area17/twill/pull/2052)

## 3.0.0-rc1

The first release candidate for Twill 3!

### Features

- Form builder now supports fieldsets, side forms, columns and more [`#1963`](https://github.com/area17/twill/pull/1963)
- Blocks can now be cloned from within the editor [`#1912`](https://github.com/area17/twill/pull/1912)
- Developer experience: Added a feature that can auto-login on development environments [`#1904`](https://github.com/area17/twill/pull/1904)

### Improvements

- A new slug implementation to have more consisten slug creation [`#1897`](https://github.com/area17/twill/pull/1897)
- Various styling fixes
- Improved defaults such as svg support
- Improved documentation styling and generator

### Bugfixes

- Many issues have been resolved in since beta2.

## 3.0.0-beta2

This is a stabilization release to prepare a first stable release.

### Improvements

- New documentation system
- New guide
- Improved defaults for new projects
- Added .gitattributes to reduce package size

### Features

- No new features were introduced in this release

### Bugfixes

- Restored edit link on user profiles [`#1891`](https://github.com/area17/twill/pull/1891)
- Fixed console error on forms with permissions [`#1890`](https://github.com/area17/twill/pull/1890)
- Fixed backwards compatibility for navigation link access [`#1886`](https://github.com/area17/twill/pull/1886)

## 3.0.0-beta1

### Features

- The upgrade path is now about complete. Check [UPGRADE.MD](./UPGRADE.MD) for full instructions.
- You can now validate array contains in multiselects [#1854](https://github.com/area17/twill/pull/1854)
- Added breadcrumbs using ->setBreadcrumbs on controllers.
- Added a new command that allows to only flush the twill manifest file [#1862](https://github.com/area17/twill/pull/1862)

### Bugfixes

- Translated media and slideshows can now be disabled [#1847](https://github.com/area17/twill/pull/1847)
- Fixed an issue where block fields would not fallback in translations [#1852](https://github.com/area17/twill/pull/1852)
- Small improvement to avoid additional queries in blocks [#1853](https://github.com/area17/twill/pull/1853)
- Fixed an issue where the menu would overlay the media browser
- Fixed form builder support for singletons
- The preview function is now more open and allows interaction [#1861](https://github.com/area17/twill/pull/1861)

### Translations

- Small improvements to the french translations [#1851](https://github.com/area17/twill/pull/1851)



## 3.0.0-alpha3

### Features

- New duplicate feature. Duplicating content from the ui now is limited to basic content, browsers, blocks, files and
  media. This no longer depends on revisions being available and can be hooked into to duplicate other relations.
- The table builder now has a method ->linkToEdit() to link a cell to the modal or edit form.

### Bugfixes

- Many small regressions are fixed.
- Fixes an issue where custom icons would not compile correctly.

## 3.0.0-alpha2

### Features

- Added new setting implementation [DOCS](https://github.com/area17/twill/blob/3.x/docs/src/settings-sections/index.md) [PR](https://github.com/area17/twill/pull/1796)
- Role enum can now be swapped without changing composer.json [DOCS](https://github.com/area17/twill/blob/3.x/docs/src/user-management/index.md#extending-user-roles-and-permissions) [PR](https://github.com/area17/twill/pull/1807)
- Submit options are now configurable using the getSubmitOptions [`#1719`](https://github.com/area17/twill/pull/1719)
- Using enableDraftRevisions you can now have drafts on top of published versions [`#1725`](https://github.com/area17/twill/pull/1725)

### Bugfixes

- When having many blocks, the list is now srollable [`#1464`](https://github.com/area17/twill/pull/1464)
- Improved support for custom icons [`#1732`](https://github.com/area17/twill/pull/1732)
- Fixes a js error that occurred when cloning repeaters [`#1734`](https://github.com/area17/twill/pull/1734)
- Resolved an issue where slug models could not be found if directories were nested [`#1738`](https://github.com/area17/twill/pull/1738)
- Fixed slugs in nested modules to not rely on random sort anymore [`#1743`](https://github.com/area17/twill/pull/1743)
- Fixed an issue where the activities dashboard could show less entries [`#1764`](https://github.com/area17/twill/pull/1764)
- Fixed an issue that could cause undefined errors when using subdomain routing [`#1779`](https://github.com/area17/twill/pull/1779)
- Optimized a query in HasRelated [`#1789`](https://github.com/area17/twill/pull/1789)
- Fixed thumbnail backwards compatability for the form builder.
- Fixed custom components in build process. [`#1809`](https://github.com/area17/twill/pull/1809)
- Fixed an issue that would not render images in the block preview. [`#1797`](https://github.com/area17/twill/pull/1797)

## 3.0.0-alpha1

### Major features

- Permission management [PR](https://github.com/area17/twill/pull/1138)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/user-management/advanced-permissions.md)
- Table builder [PR](https://github.com/area17/twill/pull/1632)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/crud-modules/tables.md)
    - Table columns now have an OOP approach
    - Table filters now have an OOP approach
- Form builder and blade-x components instead of directives for form
  views [PR](https://github.com/area17/twill/pull/1360)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/crud-modules/form-builder.md)
    - Old directives will continue to work, but are internally converted into components. We highly suggest to change to
      components as they might be deprecated in 4.x.
- [BREAKING] DateTimes are now fully timezone aware, if you previously added workarounds there should be removable.
  On the front-end dates will always be displayed in the browsers/systems timezone, but storage is in UTC.
- Controller options now have their own methods to change defaults [pr](https://github.com/area17/twill/pull/1716)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/crud-modules/controllers.md#controller-setup)
- There is a whole new documentation section on
  repeaters [docs](https://github.com/area17/twill/tree/3.x/docs/src/relations) with new features:
    - Repeaters can have a browse function to select existing items
    - Repeaters can have a relation with pivot data
- Blocks can be nested to infinity (but do not do that :)) [pr](https://github.com/area17/twill/pull/1397)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/block-editor/nested-blocks.md)

### Features

- Allow options in selects to be disabled [PR](https://github.com/area17/twill/pull/1619)
- Input masking using alpinejs [PR](https://github.com/area17/twill/pull/1605)
- Min/max/step attributes for number input fields [PR](https://github.com/area17/twill/pull/1578)
- You can now use twillTrans for block/repeater titles [PR](https://github.com/area17/twill/pull/1523)
- Administrators can now reset 2fa for other users [PR](https://github.com/area17/twill/pull/1419)
- Installable examples [PR](https://github.com/area17/twill/pull/1376)
- Revisions can now be limited [PR](https://github.com/area17/twill/pull/1479)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/crud-modules/models.md#hasrevisions)
- Morphable browser
  fields [PR](https://github.com/area17/twill/pull/1528)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/form-fields/browser.md#morphable-browser-fields)
- `artisan twill:module:make` now automatically creates entries in config/navigation and routes files.
- When generating modules or blocks, preview/site files can now be automatically generated.

### Refactorings

- BigInt is now always used [PR](https://github.com/area17/twill/pull/1600)
- [BREAKING] Better defaults [PR](https://github.com/area17/twill/pull/1484)
- Config file names are aligned with their config key name [PR](https://github.com/area17/twill/pull/1434)
- [BREAKING] Namespaces have been renamed from Admin to Twill [PR](https://github.com/area17/twill/pull/1388)
  - see [UPGRADE GUIDE](https://github.com/area17/twill/blob/3.x/UPGRADE.md)

### Bugfixes

- Fixed an issue if traits were in a bad order [PR](https://github.com/area17/twill/pull/1577)
- Many more...

### Other

- Greatly improved test coverage.
- Reintroduced the release command. Local building workflows should not be impacted by this.

### Documentation

- Documented capsules/packages [PR](https://github.com/area17/twill/pull/1628)
  - [docs](https://github.com/area17/twill/blob/3.x/docs/src/packages/index.md)

## Twill 2.x

For older changes in Twill 2.x please consult the [2.x changelog](https://github.com/area17/twill/blob/2.x/CHANGELOG.md)
