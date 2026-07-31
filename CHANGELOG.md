# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [3.0.0] — 2026-07-31

### Changed

- **Breaking:** Drop TYPO3 v13 support, require TYPO3 `^14.3`
- **Breaking:** Raise the PHP minimum to `>=8.4`
- **Breaking:** Require `oliverthiele/ot-irrebuttons ^5.0`. The `*` wildcards
  for `ot-sitekit-base` and `ot-ceheader` are replaced by `^1.0` and `^3.0`
- Migrate the language files from XLIFF 1.2 to XLIFF 2.0. Unit identifiers and
  all translations are unchanged, so no label reference needs adjusting
- Reference labels via translation domain mapping instead of full file paths:
  `ot_sitekitcetextmedia.db:`, `ot_irrebuttons.be:`, `core.form.tabs:` and
  `frontend.ttc:` replace the verbose `LLL:EXT:` references

### Fixed

- `ext_emconf.php` listed only `ot_irrebuttons` under `depends`, while
  `composer.json` also requires the base and header extensions. Both are now
  declared there as well

---

## [2.0.1] — 2026-07-28

Maintenance release — no functional changes.

### Changed

- Indent the XLIFF files with two spaces instead of tabs, following the
  `.editorconfig` inherited from the project root. Content is unchanged

---

## [2.0.0] — 2026-04-25

### Added

- TYPO3 v14.3 support (`^13.4||^14.3`)
- `oliverthiele/ot-irrebuttons ^4.0` as explicit required dependency

### Changed

- Raise PHP minimum constraint to `>=8.3`
- Drop TYPO3 v12 support

---

## [1.3.0] — 2026-03-23

### Added
- Pass `video` variable to `Media/Media` partial to enable the Video Atom (`skc:atom.video`)

### Changed
- Fixed argument syntax: `parentElements : parentElements` → `parentElements: parentElements` (consistent `key: value` style)

## [1.2.0] — 2026-03-16

### Added
- Backend preview renderer via `GenericPreviewRenderer` from `ot-sitekit-base`
- SiteSet setting `otSitekitCeTextmedia.verticalAlign` (default: `false`) — adds `align-items-center` to the Bootstrap row in all side-by-side layouts to vertically center the text column when the image is taller

### Changed
- Header partial changed from `Header` to `Header/All` for FluidStyledContent compatibility
- Added `oliverthiele/ot-ceheader` as required dependency (provides `Header/All` partial)

## [1.1.2] — 2025-03-01

### Added
- SiteKit configuration (`SiteKit.yaml`) for automatic grid registration (`minCols: 3`, groups: `group_content_wide`, `group_content_small`)

## [1.1.1] — 2025-02-01

### Changed
- Removed `<f:section>` wrapper from header partial call for better FluidStyledContent compatibility

## [1.1.0] — 2025-01-01

### Added
- `gridColumns` argument passed to header partial for correct image size calculation per layout
- New layout modes: 33/66 and 25/75 splits for media left and media right
- Multi-column text support via `ot_text_columns` field

### Changed
- Configuration for text/media component moved to dedicated TypoScript set

## [1.0.0] — 2024-01-01

### Added
- Initial release
- Content element `ot_sitekitcetextmedia` with media top, media left (50 %), and media right (50 %) layouts
- Crop variant palette support
- IRRE button integration via `ot-irrebuttons`
- Bootstrap 5 templates
- TYPO3 v13 SiteSet