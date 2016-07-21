Building Blocks (Atoms)
===



Grid
---
Let's utilize a mobile-first approach and have mobile be the default. The rest of the classes will override eachother as they cascade, letting us give alternate styles to override mobile within our responsive breakpoints. Containers won't have gutters by default but we can add a class to the container to do auto gutters. Can also apply padding atoms to individual columns to control gutter with a bit more granularity.

* [x] Column Sizes (5, 10, 15, 20, 25, 30, 33, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100)
  * [x] Documentation
* [x] Container
  * [x] Documentation
* [x] Column Default (xs)
  * [x] Documentation
* [x] Nested columns
  * [x] Documentation
* [ ] Offset Columns
  * [ ] Documentation
* [ ] Centered Columns
  * [ ] Documentation
* [ ] Container with auto gutters
  * [ ] Documentation
* [ ] Responsive Grid (Overriding with each grid size class)
  * [ ] xs
  * [ ] sm
  * [ ] md
  * [ ] lg
  * [ ] xl
  * [ ] Documentation





Typography
---
We utilize Gotham Rounded for all of our web typography. Maybe we should include a download of it for people to use while prototyping?

#### Headers and Sizing
We can provide styling for default `<h1> - <h6>`, as well as, utility classes for applying different sizes to the default elements so that we can control markup hierarchy while still applying the sizes we want visually.
* [ ] h1
  * [ ] Documentation
* [ ] h2
  * [ ] Documentation
* [ ] h3
  * [ ] Documentation
* [ ] h4
  * [ ] Documentation
* [ ] h5
  * [ ] Documentation
* [ ] h6
  * [ ] Documentation

#### Paragraph Sizing
* [ ] Default
* [ ] Size overrides for different breakpoints
* [ ] Documentation

#### Emphasis
* [ ] Regular
* [ ] Strong/Bold
* [ ] Em/Italic
* [ ] Caps
* [ ] Documentation

#### Alignment
* [ ] Left
* [ ] Right
* [ ] Center
* [ ] Justify
* [ ] Documentation

#### Lists
* [ ] Unordered List
  * [ ] Documentation
* [ ] Ordered List
  * [ ] Documentation
* [ ] Unstyled List
  * [ ] Documentation





Colors
---
Treehouse utilized colors in various parts of our app. Most of our app is gray, so color is rather important. Stick to the color guidelines at all times.

* [ ] Generic App colors
  * [ ] Documentation
* [ ] Topic colors
  * [ ] Documentation
* [ ] Text Colors
  * [ ] Documentation
* [ ] Border Colors
  * [ ] Documentation





Buttons (x-small, small, normal, large, x-large)
---
Buttons are important for submitting forms and calling out different CTAs or actions on a page.

* [ ] Default
  * [ ] Documentation
* [ ] Primary
  * [ ] Documentation
* [ ] Secondary
  * [ ] Documentation
* [ ] Alert
  * [ ] Documentation
* [ ] Inverse
  * [ ] Documentation
* [ ] Disabled
  * [ ] Documentation
* [ ] With Icon
  * [ ] Documentation
* [ ] Square (Icon Only)
  * [ ] Documentation
* [ ] Circle (Icon Only)
  * [ ] Documentation
* [ ] Pill Labels
  * [ ] Documentation
* [ ] Split Buttons
  * [ ] Documentation
* [ ] Button Groups
  * [ ] Documentation





Forms
---
Forms should always live within a `<form>` element.

* [ ] Labels
  * [ ] Documentation
* [ ] Inputs
  * [ ] Documentation
* [ ] Textareas
  * [ ] Documentation
* [ ] Selects
  * [ ] Documentation
* [ ] Radio Buttons
  * [ ] Documentation
* [ ] Checkboxes
  * [ ] Documentation
* [ ] Form Warnings
  * [ ] Documentation
* [ ] Form Errors
  * [ ] Documentation
* [ ] Form Success
  * [ ] Documentation





Tables
---
Use them for tabular data.

* [ ] Default
* [ ] Bordered
* [ ] Documentation





Layout
---
Atomic classes that can be stacked to quickly create layouts, spacing, etc, on any given page or component. All of these have responsive prefixes, defaulting to mobile-first.

#### Margin (0, 0.5, 1, 2, 3, 4, 5, 6)
* [x] uniform
* [x] top
* [x] right
* [x] bottom
* [x] right  
* [x] left and right (x-axis)
* [x] top and bottom (y-axis)
* [x] auto
* [x] Documentation

#### Padding (0, 0.5, 1, 2, 3, 4, 5, 6)
* [x] uniform
* [x] top
* [x] right
* [x] bottom
* [x] right  
* [x] left and right (x-axis)
* [x] top and bottom (y-axis)
* [x] Documentation

#### Floats
* [x] Left
* [x] Right
* [x] None
* [x] Documentation

#### Display
* [x] Inline
* [x] Inline Block
* [x] Block
* [x] None
* [x] Documentation

#### Overflow (uniform, x, y)
* [ ] Hidden
* [ ] Auto
* [ ] Scroll
* [ ] Visible
* [ ] Documentation

#### Width and Height
* [ ] Width 100%
* [ ] Width Auto
* [ ] Height 100%
* [ ] Documentation

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
* [ ] Documentation

#### Vertical Alignment
* [ ] Bottom
* [ ] Middle
* [ ] Top
* [ ] Documentation





Borders
---
Border styles that can be applied to any element

* [x] Normal
  * [x] Documentation
* [x] Dark
  * [x] Documentation
* [x] Medium
  * [x] Documentation
* [x] Light
  * [x] Documentation
* [ ] Removing Borders
  * [ ] Documentation
* [ ] Rounded Corners
  * [ ] Documentation
* [ ] Circles
  * [ ] Documentation





Responsive
---
We will utilize a mobile-first approach and apply different responsive styles at our unique breakpoints.

#### Breakpoints
* [ ] Extra Small (@screen, default mobile-first)
* [ ] Small ($sm: 480px)
* [ ] Medium ($md: 680px)
* [ ] Large ($lg: 960px)
* [ ] Extra Large ($xl: 1140px)
  * [ ] Documentation

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
* [ ] Documentation





Block Grid (1 - 6)
---
Used when a layout has a variable number of alike items that need to be presented in a grid. We will only provide options for rows of block from 1 through 6 since those are most common for this type of grid layout. Default to mobile-first and can be overriden by responsive prefixes to get variable layouts between breakpoints.

* [ ] With Gutters
  * [ ] Documentation
* [ ] Without Gutters
  * [ ] Documentation





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
