// Apply automation to elements in the Guide
var brandColors = function(elementId, $elementId, guideClass) {

  var colorDataEl = document.getElementById(elementId);
  var colorData = sassToJs(colorDataEl);
  var colorString = JSON.parse(window.getComputedStyle (
                    document.querySelector($elementId), ':before'
                  ).getPropertyValue('content'));
  var colorJSON = JSON.parse(colorString);

  for (var colorClass in colorJSON) {
    var colorObj = colorJSON[colorClass];
    var colorHexValue = colorObj;

    // Create LI and add class name to it
    var li = document.createElement("li");
    li.className = 'guide-color-item thl-float-l-xs thl-m-b-3-xs thl-col-100-sm thl-col-50-lg thl-col-33-xl';

    // Create span to hold color
    var colorSpan = document.createElement('span');
    colorSpan.className = 'p-2-xs thl-m-lr-1-xs thl-block-xs thl-round thl-brand-bg-' + colorClass;

    // Create code element to hold var function and hex
    var nameSpan = document.createElement('span');
    nameSpan.className = 'thl-block-xs text-6-xs';

    // Create em to hold hex value
    var hexSpan = document.createElement('em');
    hexSpan.className = 'thl-block-xs text-6-xs thl-color-text-color';

    // Create var function for nameSpan
    var colorName = document.createTextNode(colorClass);
    var hexValue = document.createTextNode(colorObj);
    nameSpan.appendChild(colorName);
    hexSpan.appendChild(hexValue);

    // Append everything into the LI
    colorSpan.appendChild(nameSpan);
    colorSpan.appendChild(hexSpan);
    li.appendChild(colorSpan);

    // Append LI's into the color UL
    document.querySelector(guideClass).appendChild(li);
  }
}
brandColors('brandColorData', '#brandColorData', '.guide-colors-brand');



// Apply automation to elements in the Guide
var uiColors = function(elementId, $elementId, guideClass) {

  var colorDataEl = document.getElementById(elementId);
  var colorData = sassToJs(colorDataEl);
  var colorString = JSON.parse(window.getComputedStyle (
                    document.querySelector($elementId), ':before'
                  ).getPropertyValue('content'));
  var colorJSON = JSON.parse(colorString);

  for (var colorClass in colorJSON) {
    var colorObj = colorJSON[colorClass];
    var colorHexValue = colorObj;

    // Create LI and add class name to it
    var li = document.createElement("li");
    li.className = 'guide-color-item thl-float-l-xs thl-m-b-3-xs thl-col-100-sm thl-col-33-lg thl-col-20-xl';

    // Create span to hold color
    var colorSpan = document.createElement('span');
    colorSpan.className = 'p-2-xs thl-m-lr-1-xs thl-block-xs thl-round thl-bg-' + colorClass;

    // Create code element to hold var function and hex
    var nameSpan = document.createElement('span');
    nameSpan.className = 'thl-block-xs text-6-xs';

    // Create em to hold hex value
    var hexSpan = document.createElement('em');
    hexSpan.className = 'thl-block-xs text-6-xs thl-color-text-color';

    // Create var function for nameSpan
    var colorName = document.createTextNode(colorClass);
    var hexValue = document.createTextNode(colorObj);
    nameSpan.appendChild(colorName);
    hexSpan.appendChild(hexValue);

    // Append everything into the LI
    colorSpan.appendChild(nameSpan);
    colorSpan.appendChild(hexSpan);
    li.appendChild(colorSpan);

    // Append LI's into the color UL
    document.querySelector(guideClass).appendChild(li);
  }
}
uiColors('uiColorData', '#uiColorData', '.guide-colors-ui');



// Apply automation to elements in the Guide
var grayColors = function(elementId, $elementId, guideClass) {

  var colorDataEl = document.getElementById(elementId);
  var colorData = sassToJs(colorDataEl);
  var colorString = JSON.parse(window.getComputedStyle (
                    document.querySelector($elementId), ':before'
                  ).getPropertyValue('content'));
  var colorJSON = JSON.parse(colorString);

  // Create LI and add class name to it
  var li = document.createElement("li");
  li.className = 'guide-color-item thl-float-l-xs thl-m-b-3-xs thl-col-100-sm thl-col-50-lg thl-col-33-xl';

  for (var colorClass in colorJSON) {
    var colorObj = colorJSON[colorClass];
    var colorHexValue = colorObj;

    // Create span to hold color
    var colorSpan = document.createElement('span');
    colorSpan.className = 'p-2-xs thl-m-lr-1-xs thl-block-xs thl-bg-' + colorClass;

    // Create code element to hold var function and hex
    var nameSpan = document.createElement('span');
    nameSpan.className = 'thl-block-xs text-6-xs';

    // Create em to hold hex value
    var hexSpan = document.createElement('em');
    hexSpan.className = 'thl-block-xs text-6-xs thl-color-text-color';

    // Create var function for nameSpan
    var colorName = document.createTextNode(colorClass);
    var hexValue = document.createTextNode(colorObj);
    nameSpan.appendChild(colorName);
    hexSpan.appendChild(hexValue);

    // Append everything into the LI
    colorSpan.appendChild(nameSpan);
    colorSpan.appendChild(hexSpan);
    li.appendChild(colorSpan);

    // Append LI's into the color UL
    document.querySelector(guideClass).appendChild(li);
  }
}
grayColors('grayColorData', '#grayColorData', '.guide-colors-gray');



// Apply automation to elements in the Guide
var textColors = function(elementId, $elementId, guideClass) {

  var colorDataEl = document.getElementById(elementId);
  var colorData = sassToJs(colorDataEl);
  var colorString = JSON.parse(window.getComputedStyle (
                    document.querySelector($elementId), ':before'
                  ).getPropertyValue('content'));
  var colorJSON = JSON.parse(colorString);

  // Create LI and add class name to it
  var li = document.createElement("li");
  li.className = 'guide-color-item thl-float-l-xs thl-m-b-3-xs thl-col-100-sm thl-col-50-lg thl-col-33-xl';

  for (var colorClass in colorJSON) {
    var colorObj = colorJSON[colorClass];
    var colorHexValue = colorObj;

    // Create span to hold color
    var colorSpan = document.createElement('span');
    colorSpan.className = 'p-2-xs thl-m-lr-1-xs thl-block-xs thl-text-bg-' + colorClass;

    // Create code element to hold var function and hex
    var nameSpan = document.createElement('span');
    nameSpan.className = 'thl-block-xs text-6-xs';

    // Create em to hold hex value
    var hexSpan = document.createElement('em');
    hexSpan.className = 'thl-block-xs text-6-xs thl-color-text-color';

    // Create var function for nameSpan
    var colorName = document.createTextNode(colorClass);
    var hexValue = document.createTextNode(colorObj);
    nameSpan.appendChild(colorName);
    hexSpan.appendChild(hexValue);

    // Append everything into the LI
    colorSpan.appendChild(nameSpan);
    colorSpan.appendChild(hexSpan);
    li.appendChild(colorSpan);

    // Append LI's into the color UL
    document.querySelector(guideClass).appendChild(li);
  }
}
textColors('textColorData', '#textColorData', '.guide-colors-text');



// Apply automation to elements in the Guide
var topicColors = function(elementId, $elementId, guideClass) {

  var colorDataEl = document.getElementById(elementId);
  var colorData = sassToJs(colorDataEl);
  var colorString = JSON.parse(window.getComputedStyle (
                    document.querySelector($elementId), ':before'
                  ).getPropertyValue('content'));
  var colorJSON = JSON.parse(colorString);

  for (var colorClass in colorJSON) {
    var colorObj = colorJSON[colorClass];

      // Create LI and add class name to it
      var li = document.createElement("li");
      li.className = 'guide-color-item thl-float-l-xs thl-m-b-3-xs thl-col-100-sm thl-col-50-lg thl-col-33-xl';

      for (var subProp in colorObj) {
        var colorHexValue = colorObj[subProp];

        // Create span to hold color
        var colorSpan = document.createElement('span');
        colorSpan.className = 'p-2-xs thl-m-lr-1-xs thl-block-xs thl-topic-bg-' + colorClass + '-' + subProp;

        // Create code element to hold var function and hex
        var nameSpan = document.createElement('span');
        nameSpan.className = 'thl-block-xs text-6-xs';

        // Create em to hold hex value
        var hexSpan = document.createElement('em');
        hexSpan.className = 'thl-block-xs text-6-xs thl-color-text-color';

        // Create var function for nameSpan
        var colorName = document.createTextNode(colorClass + '-' + subProp);
        var hexValue = document.createTextNode(colorHexValue);
        nameSpan.appendChild(colorName);
        hexSpan.appendChild(hexValue);

        // Append everything into the LI
        colorSpan.appendChild(nameSpan);
        colorSpan.appendChild(hexSpan);
        li.appendChild(colorSpan);

        // Append LI's into the color UL
        document.querySelector(guideClass).appendChild(li);
    }
  }
}
topicColors('topicColorData', '#topicColorData', '.guide-colors-topic');
