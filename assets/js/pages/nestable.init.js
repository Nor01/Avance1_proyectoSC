function updateOutput(t){var e=t.length?t:$(t.target),a=e.data("output");window.JSON?a.val(window.JSON.stringify(e.nestable("serialize"))):a.val("JSON browser support required for this demo.")}!function(a){"use strict";a("#nestable_list_1").nestable({group:1}).on("change",updateOutput),a("#nestable_list_2").nestable({group:1}).on("change",updateOutput),updateOutput(a("#nestable_list_1").data("output",a("#nestable_list_1_output"))),updateOutput(a("#nestable_list_2").data("output",a("#nestable_list_2_output"))),a("#nestable_list_menu").on("click",function(t){var e=a(t.target).data("action");"expand-all"===e&&a(".nestable").nestable("expandAll"),"collapse-all"===e&&a(".nestable").nestable("collapseAll")}),a("#nestable_list_3").nestable()}(jQuery);