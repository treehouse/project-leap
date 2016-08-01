<?php include_once('shared/_head.php'); ?>

<section id="float">
  <h2 class="m-b-1-xs">Forms</h2>
  <p class="m-b-2-xs">Form instructions will go here</p>

  <!-- Labels -->
  <h3 class="m-b-1-xs">Labels</h3>
  <p class="m-b-2-xs">Use the <code>.form-label</code> class to set the default styles on a label.</p>

  <form class="m-b-2-xs">
    <label class="form-label">Form Label</label>
    <label class="form-label">Required Form Label <span class="form-label-required">*</span></label>
  </form>
  <div class="guide-code m-b-4-xs">
  <pre><code class="language-html">&lt;form&gt;
&lt;label class="form-label"&gt;Form Label&lt;/label&gt;
&lt;label class="form-label"&gt;Required Form Label &lt;span class="form-label-required"&gt;*&lt;/span&gt;&lt;/label&gt;
&lt;/form&gt;</code></pre></div>

  <!-- Text Inputs -->
  <h3 class="m-b-1-xs">Text Inputs</h3>
  <p class="m-b-2-xs">Use the <code>.text-input</code> class to apply the default styling for text inputs. Inputs should always be paired with a label to make them accessible. You can use placeholder text for additional context when necessary. <strong>NEVER</strong> use placeholder text in place of a label.</p>

  <form class="m-b-2-xs">
    <label for="form-text-input-1" class="form-label">Text Input Label</label>
    <input type="text" class="form-text-input" id="form-text-input-1" placeholder="this is placeholder text">
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;label for="form-text-input-1" class="form-label"&gt;Text Input Label&lt;/label&gt;
&lt;input type="text" class="form-text-input" id="form-text-input-1" placeholder="this is placeholder text"&gt;
&lt;/form&gt;</code></pre>

  <!-- Helpers -->
  <h3 class="m-b-1-xs">Helper Text</h3>
  <p class="m-b-2-xs">When necessary, you can place additional text below the input in a <code>label</code> with a <code>.form-helper</code> to add helper text.</p>

  <form class="m-b-2-xs">
    <label for="form-text-input-2" class="form-label">Text Input Label</label>
    <input type="text" class="form-text-input" id="form-text-input-2" placeholder="Enter the url">
    <label class="form-helper">You don't need to include http://</label>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;label for="form-text-input-1" class="form-label"&gt;Text Input Label&lt;/label&gt;
&lt;input type="text" class="form-text-input" id="form-text-input-1" placeholder="this is placeholder text"&gt;
&lt;/form&gt;
&lt;label class="form-helper"&gt;You don't need to include http://&lt;/label&gt;</code></pre>

  <!-- Textareas -->
  <h3 class="m-b-1-xs">Textareas</h3>
  <p class="m-b-2-xs">Use the <code>.form-textarea</code> class to get the default styling. When setting a typesize and width, we recommend aiming for a measure of 52-78 characters.</p>

  <form class="m-b-2-xs">
    <label for="form-textarea-1" class="form-label">Textarea Label</label>
    <textarea name="form-textarea-1" id="form-textarea-1" class="form-textarea col-50-xs"></textarea>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;label for="form-textarea-1" class="form-label"&gt;Textarea Label&lt;/label&gt;
&lt;textarea name="form-textarea-1" id="form-textarea-1" class="form-textarea col-50-xs"&gt;&lt;/textarea&gt;
&lt;/form&gt;</code></pre>

  <!-- Selects -->
  <h3 class="m-b-1-xs">Selects</h3>
  <p class="m-b-2-xs">Use the <code>.form-select</code> class to get the default styling.</p>

  <form class="m-b-2-xs">
    <label for="form-select-1" class="form-label">Select Label 1</label>
    <select id="form-select-1" class="form-select">
      <option value="">Item 1</option>
      <option value="">Item 2</option>
      <option value="">Item 3</option>
      <option value="">Item 4</option>
    </select>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;label for="form-select-1" class="form-label">Select Label 1&lt;/label&gt;
&lt;select id="form-select-1" class="form-select"&gt;
&lt;option value=""&gt;Item 1&lt;/option&gt;
&lt;option value=""&gt;Item 2&lt;/option&gt;
&lt;option value=""&gt;Item 3&lt;/option&gt;
&lt;option value=""&gt;Item 4&lt;/option&gt;
&lt;/select&gt;
&lt;/form&gt;</code></pre>

  <!-- Radios -->
  <h3 class="m-b-1-xs">Radios</h3>

  <form class="m-b-2-xs">
    <input type="radio" id="form-radio-1" class="form-radio" name="radio" checked="checked">
    <label for="form-radio-1" class="form-label">
      Radio Label 1
    </label>

    <input type="radio" id="form-radio-2" class="form-radio" name="radio">
    <label for="form-radio-2" class="form-label">
      Radio Label 2
    </label>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;input type="radio" id="form-radio-1" class="form-radio" name="radio" checked="checked"&gt;
&lt;label for="form-radio-1" class="form-label"&gt;Radio Label 1&lt;/label&gt;
&lt;input type="radio" id="form-radio-2" class="form-radio" name="radio"&gt;
&lt;label for="form-radio-2" class="form-label"&gt;Radio Label 2&lt;/label&gt;
&lt;/form&gt;</code></pre>

  <!-- Checkboxes -->
  <h3 class="m-b-1-xs">Checkboxes</h3>
  <form class="m-b-2-xs">
    <input type="checkbox" id="form-checkbox-1" class="form-checkbox">
    <label for="form-checkbox-1" class="form-label">
      Checkbox Label 1
    </label>

    <input type="checkbox" id="form-checkbox-2" class="form-checkbox">
    <label for="form-checkbox-2" class="form-label">
      Checkbox Label 2
    </label>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;input type="checkbox" id="form-checkbox-1" class="form-checkbox"&gt;
&lt;label for="form-checkbox-1" class="form-label"&gt;Checkbox Label 1&lt;/label&gt;
&lt;input type="checkbox" id="form-checkbox-2" class="form-checkbox"&gt;
&lt;label for="form-checkbox-2" class="form-label"&gt;Checkbox Label 2&lt;/label&gt;
&lt;/form&gt;</code></pre>

  <!-- Uploads -->
  <h3 class="m-b-1-xs">Uploads</h3>

  <form>
    <input type="file" class="form-upload" id="form-upload-1">
    <label for="form-upload-1" class="form-label">Upload File...</label>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;input type="file" class="form-upload" id="form-upload-1"&gt;
&lt;label for="form-upload-1" class="form-label"&gt;Upload File...&lt;/label&gt;
&lt;/form&gt;</code></pre>

  <!-- Form Feedback -->
  <h3 class="m-b-1-xs">Form Success</h3>

  <form class="m-b-2-xs">
    <fieldset class="form-feedback-success form-fieldset">
      <label for="" class="form-label">Input Label</label>
      <input type="text" class="form-text-input">
      <span class="form-feedback">Hasta La Vista, Baby!</span>
    </fieldset>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;fieldset class="form-feedback-success form-fieldset"&gt;
&lt;label for="" class="form-label"&gt;Input Label&lt;/label&gt;
&lt;input type="text" class="form-text-input"&gt;
&lt;span class="form-feedback"&gt;Hasta La Vista, Baby!&lt;/span&gt;
&lt;/fieldset&gt;
&lt;/form&gt;</code></pre>

  <h3 class="m-b-1-xs">Form Warnings</h3>

  <form class="m-b-2-xs">
    <fieldset class="form-feedback-warning form-fieldset">
      <label for="" class="form-label">Input Label</label>
      <input type="text" class="form-text-input">
      <span class="form-feedback">It's not a tumor</span>
    </fieldset>
  </form>

  <pre><code class="language-html">&lt;form&gt;
&lt;fieldset class="form-feedback-warning form-fieldset"&gt;
&lt;label for="" class="form-label"&gt;Input Label&lt;/label&gt;
&lt;input type="text" class="form-text-input"&gt;
&lt;span class="form-feedback"&gt;It's not a tumor&lt;/span&gt;
&lt;/fieldset&gt;
&lt;/form&gt;</code></pre>

  <h3 class="m-b-1-xs">Form Error</h3>

  <form class="m-b-2-xs">
    <fieldset class="form-feedback-error form-fieldset">
      <label for="" class="form-label">Input Label</label>
      <input type="text" class="form-text-input">
      <span class="form-feedback">Get to the chopper!</span>
    </fieldset>
  </form>
</section>

<pre><code class="language-html">&lt;form&gt;
&lt;fieldset class="form-feedback-error form-fieldset"&gt;
&lt;label for="" class="form-label"&gt;Input Label&lt;/label&gt;
&lt;input type="text" class="form-text-input"&gt;
&lt;span class="form-feedback"&gt;Get to the chopper!&lt;/span&gt;
&lt;/fieldset&gt;
&lt;/form&gt;</code></pre>

<?php include_once('shared/_foot.php'); ?>
