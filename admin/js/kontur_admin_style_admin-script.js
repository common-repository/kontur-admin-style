//#1 http://stackoverflow.com/questions/15118802/jquery-fade-out-div-display-after-certain-set-time

jQuery("#kontur-admin-style-notice").fadeIn('slow').delay(2000).fadeOut('slow');

//or http://stackoverflow.com/questions/17677398/hide-a-div-after-5-seconds-or-when-the-user-clicks-the-close-link

jQuery(window).load(function () {
    setTimeout(function () {
        jQuery('.is-dismissible').fadeOut()
    }, 2000);
});

(function ($) {

    // Add Color Picker to all inputs that have 'color-field' class
    $(function () {
        $('.color-field').wpColorPicker();
    });




})(jQuery);





// Tabs

jQuery(document).ready(function () {
    var tabs = jQuery("#tabs");

    // For each individual tab DIV, set class and aria-hidden attribute, and hide it
    jQuery(tabs).find("> div").attr({
        "class": "tabPanel",
        "aria-hidden": "true"
    }).hide();

    // Get the list of tab links
    var tabsList = tabs.find("ul:first").attr({
        "class": "tabsList",
    });

    // For each item in the tabs list...
    jQuery(tabsList).find("li > a").each(
        function (a) {
            var tab = jQuery(this);

            // Create a unique id using the tab link's href
            var tabId = "tab-" + tab.attr("href").slice(1);

            // Assign tab id and aria-selected attribute to the tab control, but do not remove the href
            tab.attr({
                "id": tabId,
                "aria-selected": "false",
            }).parent().attr("role", "presentation");

            // Assign aria attribute to the relevant tab panel
            jQuery(tabs).find(".tabPanel").eq(a).attr("aria-labelledby", tabId);

            // Set the click event for each tab link
            tab.click(
                function (e) {
                    var tabPanel;

                    // Prevent default click event
                    e.preventDefault();

                    // Change state of previously selected tabList item
                    jQuery(tabsList).find("> li.current").removeClass("current").find("> a").attr("aria-selected", "false");

                    // Hide previously selected tabPanel
                    jQuery(tabs).find(".tabPanel:visible").attr("aria-hidden", "true").hide();

                    // Show newly selected tabPanel
                    tabPanel = jQuery(tabs).find(".tabPanel").eq(tab.parent().index());
                    tabPanel.attr("aria-hidden", "false").show();

                    // Set state of newly selected tab list item
                    tab.attr("aria-selected", "true").parent().addClass("current");

                    // Set focus to the first heading in the newly revealed tab content
                    tabPanel.children("h2").attr("tabindex", -1).focus();
                }
            );
        }
    );

    // Set keydown events on tabList item for navigating tabs
    jQuery(tabsList).delegate("a", "keydown",
        function (e) {
            var tab = jQuery(this);
            switch (e.which) {
                case 37:
                case 38:
                    if (tab.parent().prev().length != 0) {
                        tab.parent().prev().find("> a").click();
                    } else {
                        jQuery(tabsList).find("li:last > a").click();
                    }
                    break;
                case 39:
                case 40:
                    if (tab.parent().next().length != 0) {
                        tab.parent().next().find("> a").click();
                    } else {
                        jQuery(tabsList).find("li:first > a").click();
                    }
                    break;
            }
        }
    );

    // Show the first tabPanel
    jQuery(tabs).find(".tabPanel:first").attr("aria-hidden", "false").show();

    // Set state for the first tabsList li
    jQuery(tabsList).find("li:first").addClass("current").find(" > a").attr({
        "aria-selected": "true",
        "tabindex": "0"
    });
});