Building Blocks
===



Grid
---
Let's utilize a mobile-first approach and have mobile be the default. The rest of the classes will override eachother as they cascade, letting us give alternate styles to override mobile within our responsive breakpoints. Containers won't have gutters by default but we can add a class to the container to do auto gutters. Can also apply padding atoms to individual columns to control gutter with a bit more granularity.

* [ ] Container
* [ ] Container with auto gutters
* [ ] Column Default
* [ ] Nested columns
* [ ] Centered Columns
* [ ] Column Sizes (5, 10, 15, 20, 25, 30, 33, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100)
  * [ ] mobile
  * [ ] mobile + tablet
  * [ ] tablet
  * [ ] tablet + desktop
  * [ ] desktop





Typography
---
We utilize Gotham Rounded for all of our web typography. Maybe we should include a download of it for people to use while prototyping?

#### Headers and Sizing
We can provide styling for default `<h1> - <h6>`, as well as, utility classes for applying different sizes to the default elements so that we can control markup hierarchy while still applying the sizes we want visually.
* [ ] h1
* [ ] h2
* [ ] h3
* [ ] h4
* [ ] h5
* [ ] h6

#### Paragraph Sizing
* [ ] Default
* [ ] Size overrides for different breakpoints

#### Emphasis
* [ ] Regular
* [ ] Strong/Bold
* [ ] Em/Italic
* [ ] Caps

#### Alignment
* [ ] Left
* [ ] Right
* [ ] Center
* [ ] Justify

#### Lists
* [ ] Unordered List
* [ ] Ordered List
* [ ] Unstyled List





Colors
---
Treehouse utilized colors in various parts of our app. Most of our app is gray, so color is rather important. Stick to the color guidelines at all times.

* [ ] Generic App colors
* [ ] Topic colors
* [ ] Text Colors
* [ ] Border Colors





Buttons (x-small, small, normal, large, x-large)
---
Buttons are important for submitting forms and calling out different CTAs or actions on a page.

* [ ] Default
* [ ] Primary
* [ ] Secondary
* [ ] Alert
* [ ] Inverse
* [ ] Disabled
* [ ] With Icon
* [ ] Square (Icon Only)
* [ ] Circle (Icon Only)
* [ ] Pill Labels
* [ ] Split Buttons
* [ ] Button Groups





Forms
---
Forms should always live within a `<form>` element.

* [ ] Labels
* [ ] Inputs
* [ ] Textareas
* [ ] Selects
* [ ] Radio Buttons
* [ ] Checkboxes
* [ ] Form Warnings
* [ ] Form Errors
* [ ] Form Success





Tables
---
Use them for tabular data.

* [ ] Default
* [ ] Bordered





Layout
---
Atomic classes that can be stacked to quickly create layouts, spacing, etc, on any given page or component. All of these have responsive prefixes, defaulting to mobile-first.

#### Margin (0, 0.5, 1, 2, 3, 4, 5, 6)
* [ ] uniform
* [ ] top
* [ ] right
* [ ] bottom
* [ ] right  
* [ ] left and right (x-axis)
* [ ] top and bottom (y-axis)
* [ ] auto

#### Padding (0, 0.5, 1, 2, 3, 4, 5, 6)
* [ ] uniform
* [ ] top
* [ ] right
* [ ] bottom
* [ ] right  
* [ ] left and right (x-axis)
* [ ] top and bottom (y-axis)

#### Floats
* [ ] Left
* [ ] Right
* [ ] None

#### Display
* [x] Inline
* [x] Inline Block
* [x] Block
* [x] None

#### Overflow
* [ ] Hidden
* [ ] Auto
* [ ] Scroll
* [ ] Visible

#### Width and Height
* [ ] Width 100%
* [ ] Width Auto
* [ ] Height 100%

#### Positioning
* [ ] Relative
* [ ] Absolute
* [ ] Fixed
* [ ] Static
* [ ] Top
* [ ] Bottom
* [ ] Right
* [ ] Left
* [ ] Z-Index (4 different levels? 100, 200, 300, 400?)

#### Vertical Alignment
* [ ] Bottom
* [ ] Middle
* [ ] Top





Borders
---
Border styles that can be applied to any element

* [ ] Normal
* [x] Dark
* [ ] Medium
* [ ] Light
* [ ] Removing Borders
* [ ] Rounded Corners
* [ ] Circles





Responsive (mobile, mobile + tablet, tablet, tablet + desktop, desktop)
---
We will utilize a mobile-first approach and apply different responsive styles at our unique breakpoints.

#### Breakpoints
* [ ] Mobile Down: max-width $mobile-max (< 679px)
* [ ] Tablet Down: max-width $tablet-max (< 959px)
* [ ] Tablet Up: min-width $tablet-min (> 680px)
* [ ] Tablet + Desktop Only min-width $tablet-min max-width $tablet-max (680px - 959px)
* [ ] Desktop Up: min-width $desktop-min (> 960px)

#### Prefixable Thing
* [ ] Text Sizing
* [ ] Text Alignment
* [ ] Display
* [ ] Floats
* [ ] Overflow
* [ ] Margin
* [ ] Padding
* [ ] Positioning
* [ ] Position Spacing
* [ ] Borders
* [ ] Grid
* [ ] Grid Offsets
* [ ] Block Grid
* [ ] Width and Height





Block Grid (1 - 6)
---
Used when a layout has a variable number of alike items that need to be presented in a grid. We will only provide options for rows of block from 1 through 6 since those are most common for this type of grid layout. Default to mobile-first and can be overriden by responsive prefixes to get variable layouts between breakpoints.

* [ ] With Gutters
* [ ] Without Gutters





Components
===





Extensive Lists
---
Starting off by building a list of components that are found in the app. We can get more detailed as we dig into the parts and variations of each.

* [ ] Boxes (Header, Content, Footer)
* [ ] Alert Banners
* [ ] Welcome Banners
* [ ] Cards
* [ ] Modals
* [ ] Video Player
* [ ] Main Navigation
* [ ] Control Bars
* [ ] Tooltips
* [ ] Avatars
* [ ] Step Lists
* [ ] Leaderboard Lists
* [ ] Quiz
* [ ] Course Stage Progress Bar
* [ ] Stage Progress Bar
* [ ] Generic Step Progress Bar
* [ ] Curriculum Step
* [ ] Tabs
* [ ] Dropdowns
* [ ] Forum Questions
* [ ] Answer Count
* [ ] Community Breadcrumbs
* [ ] Ask to Answer Lists
* [ ] Topic Filter List
* [ ] Stat Circles
* [ ] Radial Progress Bars
* [ ] Charts
* [ ] Badge Cards (On Profiles)
* [ ] Profile Modal
* [ ] Notifications Panel
* [ ] Resume Steps Panel
* [ ] Workspace Allotment Progress Bar
* [ ] Stats Group (Orgs)
* [ ] Activity Feed (Orgs)
* [ ] Plan Cards (Enrollment)
* [ ] Techdegree Selection Panel (Enrollment)
* [ ] Checkboxes with Title and Helper Text
* [ ] Comparison Table
* [ ] App Footer
