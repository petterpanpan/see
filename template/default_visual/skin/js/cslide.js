
    //<!CDATA[
        var bodyBgs = [];
        bodyBgs[0] = "{get(cslide_pic1)}";
        bodyBgs[1] = "{get(cslide_pic2)}";
        bodyBgs[2] = "{get(cslide_pic3)}";
        bodyBgs[3] = "{get(cslide_pic4)}";
        bodyBgs[4] = "{get(cslide_pic5)}";
        var randomBgIndex = Math.round( Math.random() * 4 );
    //输出随机的背景图
        document.write('<img src="' + bodyBgs[randomBgIndex] + '" class="img-responsive" >');
    //]]>

