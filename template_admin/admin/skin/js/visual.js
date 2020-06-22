function supportstorage() {
    if (typeof window.localStorage=='object')
        return true;
    else
        return false;
}

function handleSaveLayout1() {
    var e = $(".visual-right").html();
    if (!stopsave && e != window.demoHtml) {
        stopsave++;
        window.demoHtml = e;
        saveLayout1();
        stopsave--;
    }
}


function handleSaveLayout() {
    var e = $(".visual-right").html();
    if (e != window.demoHtml) {
        saveLayout();
        window.demoHtml = e
    }
}

var layouthistory;
function saveLayout1(){
    var data = layouthistory;
    if (!data) {
        data={};
        data.count = 0;
        data.list = [];
    }
    if (data.list.length>data.count) {
        for (i=data.count;i<data.list.length;i++)
            data.list[i]=null;
    }
    data.list[data.count] = window.demoHtml;
    data.count++;
    if (supportstorage()) {
        localStorage.setItem("layoutdata",JSON.stringify(data));
    }
    layouthistory = data;
    //console.log(data);
    /*$.ajax({
        type: "POST",
        url: "/build/saveLayout",
        data: { layout: $('.visual-right').html() },
        success: function(data) {
            //updateButtonsVisibility();
        }
    });*/
}


function handleJsIds() {
    handleModalIds();
    handleAccordionIds();
    handleCarouselIds();
    handleTabsIds()
}

function handleJsClass(e,t) {
    div = $(e.target).find('.view>div');
    //console.log(div);
    div.each(function() {
        $(this).removeClass(function(index, classname){
            //console.log(index);
            arr = classname.split(' ');
            var r = '';
            for(key in arr){
                var re = /^layout_\d+$/gi;
                if(re.test(arr[key])) {
                    r += arr[key] + " ";
                }
            }
            return r;
        });
        var t = randomNumber();
        $(this).addClass("layout_"+t);
    });
}

function handleAccordionIds() {
    var e = $(".visual-right #myAccordion");
    var t = randomNumber();
    var n = "panel-" + t;
    var r;
    e.attr("id", n);
    e.find(".panel").each(function(e, t) {
        r = "panel-element-" + randomNumber();
        $(t).find(".panel-title").each(function(e, t) {
            $(t).attr("data-parent", "#" + n);
            $(t).attr("href", "#" + r)
        });
        $(t).find(".panel-collapse").each(function(e, t) {
            $(t).attr("id", r)
        })
    })
}

function handleCarouselIds() {
    var e = $(".visual-right #myCarousel");
    var t = randomNumber();
    var n = "carousel-" + t;
    e.attr("id", n);
    e.find(".carousel-indicators li").each(function(e, t) {
        $(t).attr("data-target", "#" + n)
    });
    e.find(".left").attr("href", "#" + n);
    e.find(".right").attr("href", "#" + n)
}

function handleModalIds() {
    var e = $(".visual-right #myModalLink");
    var t = randomNumber();
    var n = "modal-container-" + t;
    var r = "modal-" + t;
    e.attr("id", r);
    e.attr("href", "#" + n);
    e.next().attr("id", n)
}

function handleTabsIds() {
    var e = $(".visual-right #myTabs");
    var t = randomNumber();
    var n = "tabs-" + t;
    e.attr("id", n);
    e.find(".tab-pane").each(function(e, t) {
        var n = $(t).attr("id");
        var r = "panel-" + randomNumber();
        $(t).attr("id", r);
        $(t).parent().parent().find("a[href=#" + n + "]").attr("href", "#" + r)
    })
}

function randomNumber() {
    return randomFromInterval(1, 1e6)
}

function randomFromInterval(e, t) {
    return Math.floor(Math.random() * (t - e + 1) + e)
}

function gridSystemGenerator() {
    $(".lyrow .preview input").bind("keyup",
        function() {
            var e = 0;
            var t = "";
            var n = false;
            var r = $(this).val().split(" ", 12);
            $.each(r,
                function(r, i) {
                    if (!n) {
                        if (parseInt(i) <= 0) n = true;
                        e = e + parseInt(i);
                        t += '<div class="col-md-' + i + ' column"></div>'
                    }
                });
            if (e == 12 && !n) {
                $(this).parent().next().children().html(t);
                $(this).parent().prev().show()
            } else {
                $(this).parent().prev().hide()
            }
        })
}

function configurationElm(e, t) {
    $(".visual-right").delegate(".configuration > a", "click", function(e) {
        e.preventDefault();
        var t = $(this).parent().next().next().children();
        $(this).toggleClass("active");
        t.toggleClass($(this).attr("rel"))
    });
    $(".visual-right").delegate(".configuration .dropdown-menu a", "click", function(e) {
        e.preventDefault();
        var t = $(this).parent().parent();
        var n = t.parent().parent().next().next().children();
        t.find("li").removeClass("active");
        $(this).parent().addClass("active");
        var r = "";
        t.find("a").each(function() {
            r += $(this).attr("rel") + " "
        });
        t.parent().removeClass("open");
        n.removeClass(r);
        n.addClass($(this).attr("rel"))
    })
}

function clearDemo() {
    $(".visual-right").empty()
    layouthistory = null;
    if (supportstorage())
        localStorage.removeItem("layoutdata");
}

function removeMenuClasses() {
    $("#menu-layoutit li button").removeClass("active")
}

function changeStructure(e, t) {
    $("#download-layout ." + e).removeClass(e).addClass(t)
}

function cleanHtml(e) {
    $(e).parent().append($(e).children().html())
}

function downloadLayoutSrc() {
	formatSrc = getLayoutSrc();
    $("#download-layout").html(formatSrc);
    $("#downloadModal textarea").empty();
    $("#downloadModal textarea").val(formatSrc)
}

function undoLayout() {
    var data = layouthistory;
    //console.log(data);
    if (data) {
        if (data.count<2) return false;
        window.demoHtml = data.list[data.count-2];
        data.count--;
        $('.visual-right').html(window.demoHtml);
        if (supportstorage()) {
            localStorage.setItem("layoutdata",JSON.stringify(data));
        }
        return true;
    }
    return false;
}

function redoLayout() {
    var data = layouthistory;
    if (data) {
        if (data.list[data.count]) {
            window.demoHtml = data.list[data.count];
            data.count++;
            $('.visual-right').html(window.demoHtml);
            if (supportstorage()) {
                localStorage.setItem("layoutdata",JSON.stringify(data));
            }
            return true;
        }
    }
    return false;
}

function ReplaceAll(str, sptr, sptr1){
    while (str.indexOf(sptr) >= 0){
        str = str.replace(sptr, sptr1);
    }
    return str;
}

function getLayoutSrc() {
    var e = "";
    $("#download-layout").children().html($(".visual-right").html());
    var t = $("#download-layout").children();
	t.find('.tag').each(function(i){
		$(this).html($(this).find('.tagname').html());
	});
	t.find('.view .nav').each(function(i){
		$(this).replaceWith("{"+$(this).attr('rel')+"}");
	});
	
	t.find('.view .visua-code-show').each(function(i){
        code = $(this).siblings('.visua-code').html();
        $(this).siblings('.visua-code').remove();
        $(this).replaceWith(code);
	    //$(this).parent().html($(this).val());
	    //console.log($(this).val());
	    //$(this).replaceWith($(this).val());
    });

    t.find('.view .custtag').each(function(i){
        $(this).replaceWith("{"+$(this).attr('rel')+"}");
    });
    t.find('.view .viewarea').each(function(i){
        code = $(this).siblings('.codearea').html();
        code = ReplaceAll(code,'#[#','{');
        code = ReplaceAll(code,'#]#','}');
        $(this).siblings('.codearea').remove();
        $(this).replaceWith(code);
    });
    t.find(".preview, .configuration, .drag, .remove,.edit").remove();
    t.find("var.selected").remove();
    t.find(".lyrow").addClass("removeClean");
    t.find(".box-element").addClass("removeClean");
	t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
	t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".lyrow .removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".removeClean").each(function() {
        cleanHtml(this)
    });
    t.find(".removeClean").remove();
    $("#download-layout .column").removeClass("ui-sortable");
    $("#download-layout .row-fluid").removeClass("clearfix").children().removeClass("column");
    if ($("#download-layout .container").length > 0) {
        changeStructure("row-fluid", "row")
    }
	//console.log($("#download-layout").html());
    formatSrc = $.htmlClean($("#download-layout").html(), {
        format: true,
        allowedAttributes: [["id"], ["preload"],["target"],["width"],["height"],["style"],["face"],["src"],["autoplay"],["controls"],['color'],['size'],["class"], ["data-toggle"], ["data-target"], ["data-parent"], ["role"], ["data-dismiss"], ["data-icomoon"],["aria-labelledby"], ["aria-hidden"], ["data-slide-to"], ["data-slide"],["data-src"],["data-sub-html"],["data-ride"],["data-sub-html"],["role"],["aria-hidden"],["onerror"],["href"],["center"],["aria-expanded"],["script"],["link"],["rel"]]
    });
    formatSrc = formatSrc.replace(/\(&quot;/g,"('");
    formatSrc = formatSrc.replace(/&quot;\)/g,"')");
    return formatSrc;
}

var currentDocument = null;
var timerSave = 2e3;
var stopsave = 0;
var startdrag = 0;
var demoHtml = $(".visual-right").html();

$(window).resize(function() {
    $("body").css("min-height", $(window).height() - 90);
    $(".visual-right").css("min-height", $(window).height() - 160)
});

function restoreData(){
    return false;
    if (supportstorage()) {
        layouthistory = JSON.parse(localStorage.getItem("layoutdata"));
        if (!layouthistory) return false;
        window.demoHtml = layouthistory.list[layouthistory.count-1];
        if (window.demoHtml) $(".visual-right").html(window.demoHtml);
    }
}

function initContainer(){
    $(".visual-right, .visual-right .column").sortable({
        connectWith: ".column",
        opacity: .35,
        handle: ".drag",
        start: function(e,t) {
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        stop: function(e,t) {
            if(stopsave>0) stopsave--;
            startdrag = 0;
        }
    });
    configurationElm();
}

$(document).ready(function() {
    restoreData();
    $("body").css("min-height", $(window).height() - 90);
    $(".visual-right").css("min-height", $(window).height() - 160);
    $(".visual-right, .visual-right .column").sortable({
        connectWith: ".column",
        opacity: .35,
        handle: ".drag"
    });
    $(".visual-left .lyrow").draggable({
        connectToSortable: ".visual-right",
        helper: "clone",
        handle: ".drag",
        start: function(e,t) {
            handleJsClass(e,t);
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        drag: function(e, t) {
            t.helper.width(400);
        },
        stop: function(e, t) {

            $(".visual-right .column").sortable({
                opacity: .35,
                connectWith: ".column",
                start: function(e,t) {
                    if (!startdrag) stopsave++;
                    startdrag = 1;
                },
                stop: function(e,t) {
                    if(stopsave>0) stopsave--;
                    startdrag = 0;
                }
            });
            if(stopsave>0) stopsave--;
            startdrag = 0;
        }
    });
    $(".visual-left .visual-drag-box").draggable({
        connectToSortable: ".column",
        helper: "clone",
        handle: ".drag",
        start: function(e,t) {
            if (!startdrag) stopsave++;
            startdrag = 1;
        },
        drag: function(e, t) {
            t.helper.width(400)
        },
        stop: function() {
            handleJsIds();
            if(stopsave>0) stopsave--;
            startdrag = 0;
        }
    });
    initContainer();

	
    $("[data-target='#downloadModal']").click(function(e) {
        e.preventDefault();
        downloadLayoutSrc()
    });
    $("#download").click(function() {
        downloadLayout();
        return false
    });
    $("#downloadhtml").click(function() {
        downloadHtmlLayout();
        return false
    });
    $("#edit").click(function() {
        $("body").removeClass("devpreview sourcepreview");
        $("body").addClass("edit");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });
    $("#clear").click(function(e) {
        e.preventDefault();
        clearDemo()
    });
    $("#devpreview").click(function() {
        $("body").removeClass("edit sourcepreview");
        $("body").addClass("devpreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });
    $("#sourcepreview").click(function() {
        $("body").removeClass("edit");
        $("body").addClass("devpreview sourcepreview");
        removeMenuClasses();
        $(this).addClass("active");
        return false
    });
    $(".nav-header").click(function() {
        $(".visual-left .boxes, .visual-left .rows").hide();
        $(this).next().slideDown()
    });
    //removeElm();
    //console.log('2222');
    configurationElm();
    gridSystemGenerator();
    setInterval(function() {handleSaveLayout1()}, timerSave);

    $('#undo').click(function(){
        stopsave++;
        //console.log(stopsave);
        if (undoLayout()) initContainer();
        stopsave--;
    });
    $('#redo').click(function(){
        stopsave++;
        if (redoLayout()) initContainer();
        stopsave--;
    });
})