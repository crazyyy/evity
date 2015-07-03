//Active menu item
$(function () {        
    $('.top-menu a, .foot-menu a, .portfolio-menu a').each(function () { 
        var location = window.location.href;
        var link = this.href;
        if(location == link) {  
            $(this).addClass('active-top-menu-item');
        }
    });
});
//Tabs for our work
$(document).ready(function() {
    $("ul.work-tabs-block>li:first-child").addClass("selected-tab");
    $("ul.work-tabs>li:first-child").addClass("selected-active-tab");
    //On Click Event
    $("ul.work-tabs li:first-child").click(function() {
        $("ul.work-tabs-block>li").removeClass("selected-tab");
        $("ul.work-tabs>li").removeClass("selected-active-tab");
        $("ul.work-tabs>li:first-child").addClass("selected-active-tab");
        $("ul.work-tabs-block>li:first-child").addClass("selected-tab");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
    //On Click Event
    $("ul.work-tabs li:first-child+*").click(function() {
        $("ul.work-tabs-block>li").removeClass("selected-tab");
        $("ul.work-tabs>li").removeClass("selected-active-tab");
        $("ul.work-tabs>li:first-child+*").addClass("selected-active-tab");
        $("ul.work-tabs-block>li:first-child+*").addClass("selected-tab");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
    //On Click Event
    $("ul.work-tabs li:first-child+*+*").click(function() {
        $("ul.work-tabs-block>li").removeClass("selected-tab");
        $("ul.work-tabs>li").removeClass("selected-active-tab");
        $("ul.work-tabs>li:first-child+*+*").addClass("selected-active-tab");
        $("ul.work-tabs-block>li:first-child+*+*").addClass("selected-tab");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
    //On Click Event
    $("ul.work-tabs li:first-child+*+*+*").click(function() {
        $("ul.work-tabs-block>li").removeClass("selected-tab");
        $("ul.work-tabs>li").removeClass("selected-active-tab");
        $("ul.work-tabs>li:first-child+*+*+*").addClass("selected-active-tab");
        $("ul.work-tabs-block>li:first-child+*+*+*").addClass("selected-tab");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
    //On Click Event
    $("ul.work-tabs li:first-child+*+*+*+*").click(function() {
        $("ul.work-tabs-block>li").removeClass("selected-tab");
        $("ul.work-tabs>li").removeClass("selected-active-tab");
        $("ul.work-tabs>li:first-child+*+*+*+*").addClass("selected-active-tab");
        $("ul.work-tabs-block>li:first-child+*+*+*+*").addClass("selected-tab");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
    //On Click Event
    $("ul.work-tabs li:first-child+*+*+*+*+*").click(function() {
        $("ul.work-tabs-block>li").removeClass("selected-tab");
        $("ul.work-tabs>li").removeClass("selected-active-tab");
        $("ul.work-tabs>li:first-child+*+*+*+*+*").addClass("selected-active-tab");
        $("ul.work-tabs-block>li:first-child+*+*+*+*+*").addClass("selected-tab");
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
});
//Rotator for our work
$(document).ready(function(){   
    $(".slider").easySlider({
        prevId:         'prevBtn',
        prevText:       ' ',
        nextId:         'nextBtn',  
        nextText:       ' ',
        auto: false, 
        continuous: true
    });
    $(".slider2").easySlider({
        prevId:         'prevBtn2',
        prevText:       ' ',
        nextId:         'nextBtn2', 
        nextText:       ' ',
        auto: false, 
        continuous: true
    });
    $(".slider3").easySlider({
        prevId:         'prevBtn3',
        prevText:       ' ',
        nextId:         'nextBtn3', 
        nextText:       ' ',
        auto: false, 
        continuous: true
    });
    $(".slider4").easySlider({
        prevId:         'prevBtn4',
        prevText:       ' ',
        nextId:         'nextBtn4', 
        nextText:       ' ',
        auto: false, 
        continuous: true
    });
  var checkboxSettings = {
    virtualCheckbox : $('.checkbox-js')
  }
    checkboxSettings.virtualCheckbox.change(function(){
    $(this).parent().toggleClass('active');
  });


    var settings = {
        allSum : 0,
        serviceallSum : 0,
        calc : '.calc',
        calcEnd : '.calc-end',
        calcEndFields : '.field2',
        key : true,
        floatCalcBl : $('.float-calc-block-js'),
        floatCalcWnd : $('.float-calc-window'),
        serviceAllSumBl : '.all-service-sum-js',
        allSumBl : '.all-sum-js',
        checkEl : '.checkbox-js',
        mainCheckEl : '.main-checkbox-js',
        checkMainBl : '.service-item',
        checkMainList : '.services-list',
        fieldset : '.calc-fieldset',
        dopServises : '.service-item-dop-js',
        numField : '.num-field',
        numSumBl : '.num-sum-js',
        myUrl : location.href,
        urlPage : "http://homa.viking-r.pp.ua/kaljkulyator.html",
        errorClass : 'error',
        resetBl : '.float-calc-reset',
        floatSubmit : '.float-calc-submit',
        sumData : '.sumData',
        sumHTML : '.htmlData',
        submitButton : '.button-sumbit-js',
        floatWinList : '.float-calc-list',
        close : '.float-calc-close'
    }

    // обнуление полей при загрузке страницы
    if (settings.myUrl === settings.urlPage) {
        $(window).on("load", function() {
            $(settings.calc).find(settings.numField).val(0);
            $(settings.checkEl).removeAttr('checked', false).parent().removeClass('active');
        });
    };

    $(settings.calc).on('change', settings.checkEl, function() {
        $thisCheckBl = $(this),
        $thisCheck = $thisCheckBl.prop('checked'),
        $checkID = $thisCheckBl.attr('id'),
        $checkVal = $thisCheckBl.val(),
        $checkPrice = $thisCheckBl.data('price'),
        //Уровни вложженности
        $thisCheckMainGlobal = $thisCheckBl.closest(settings.calc), // До формы
        $thisCheckMainList = $thisCheckBl.closest(settings.checkMainList), // До списка главного
        $thisCheckMainBl = $thisCheckBl.closest(settings.checkMainBl), // до елемента списка 
        $thisRelativesCheck = $thisCheckMainList.find(settings.checkEl),
        $thisDrop = $thisCheckMainBl.find(settings.dopServises),
        $msg = $('<li class="float-calc-item" id="el'+ $checkID + '"></li>'),
        $serviceClose = $('<div class="float-calc-close"></div>'),
        $serviceName = $('<div class="float-calc-item-name left"></div>'),
        $servicePrice = $('<div class="float-calc-item-info right"></div>'),
        allCheckSum = 0,
        allSumFinal = 0;

        if ($thisCheck) {
            if ($thisCheckBl.hasClass('main-checkbox-js')) {
                if ($thisDrop.length > 0) {
                    $thisDrop.show();

                    if ($thisDrop.hasClass('service-item-dop-multiplication')) {
                        var $dropFields = $thisDrop.find(settings.numField),
                            $dropFieldVal = $dropFields.val(),
                            $dropFieldNum = $dropFields.data('number');
                        $dropFieldSum = $dropFieldVal * $dropFieldNum;
                        $dropFields.parent().find(settings.numSumBl).text($dropFieldSum);
                        $dropFields.closest(settings.checkMainBl).find(settings.checkEl).data('price', $dropFieldSum);
                    };
                };
            };
            // формируем сообщение

            $serviceName.append($checkVal);
            $servicePrice.append('<span class="itesmPrice-js">' + $checkPrice + '</span> р.');
            $msg.append($serviceClose);
            $msg.append($serviceName);
            $msg.append($servicePrice);

            if ($thisCheckBl.closest('ul').hasClass('services-list2')) {
                var checkNewId = $thisCheckMainBl.find(settings.mainCheckEl).attr('id');
                $serviceName.prepend('- ');
                $msg.addClass('dropMes' + checkNewId);
                $('#el' + checkNewId).after($msg);
            }
            else{
                $(settings.floatWinList).append($msg);
            }

        }
        else{
            if ($thisCheckBl.hasClass('main-checkbox-js')) {
                if ($thisDrop.length > 0) {

                    $thisDrop
                            .hide()
                            .find(settings.checkEl).removeAttr('checked', false)
                            .parent().removeClass('active');
                    $('.dropMes'+$checkID).remove();
                    
                };
            };
            $('#el'+$checkID).remove();
        }

        $thisRelativesCheck.each(function(){
            var eachCkeckData = $(this).data('price'),
                eachCkeckProp = $(this).prop('checked');

            if (eachCkeckProp) {
                allCheckSum += eachCkeckData;
            };
        });

        //формируем местную сумму
        $thisCheckMainList.find(settings.serviceAllSumBl)
                                                        .text(allCheckSum)
                                                        .data('allPrice', allCheckSum);

        var $eachCheckList = $thisCheckMainGlobal.find(settings.checkMainList);
        $eachCheckList.each(function(){
            var $eachCheckAllSum = $(this).find(settings.serviceAllSumBl).data('allPrice');

            if (!$eachCheckAllSum) {
                $eachCheckAllSum = 0;
            };

            allSumFinal += $eachCheckAllSum;
            
        });

        //формируем главную сумму
        $(settings.allSumBl)
                            .text(allSumFinal)
                            .data('sum', allSumFinal);
        $(settings.sumData).val(allSumFinal);

        var $submitData = $(settings.floatWinList).html();
        $(settings.sumHTML).val($submitData);

        //появление бококвой панели

        if ($(settings.checkEl).is(":checked")) {
            if (settings.floatCalcWnd.is(':visible') == false) {
                settings.floatCalcBl.show();
            };
        }
        else{
            settings.floatCalcBl.hide();
            settings.floatCalcWnd.hide();
        };

        
    })
    .on('change', settings.numField, function(event) {
        var $dropFields = $(this),
            $dropFieldVal = $dropFields.val(),
            $dropFieldNum = $dropFields.data('number'),
            //Уровни вложженности
            $thisCheckMainGlobal = $dropFields.closest(settings.calc), // До формы
            $thisCheckMainList = $dropFields.closest(settings.checkMainList), // До списка главного,
            $thisCheckMainBl = $dropFields.closest(settings.checkMainBl), // До списка главного,
            $dropFieldCheckArr = $thisCheckMainList.find(settings.checkEl),
            $thisCheckId = $thisCheckMainBl.find(settings.mainCheckEl).attr('id'),
            allCheckSum = 0,
            allSumFinal = 0;

        $dropFieldSum = $dropFieldVal * $dropFieldNum;
        $dropFields.parent().find(settings.numSumBl).text($dropFieldSum);
        $dropFields.closest(settings.checkMainBl).find(settings.checkEl).data('price', $dropFieldSum);

        
        $dropFieldCheckArr.each(function(){
            var eachCkeckData = $(this).data('price'),
                eachCkeckProp = $(this).prop('checked');

            if (eachCkeckProp) {
                allCheckSum += eachCkeckData;
            };
        });

        //формируем местную сумму
        $thisCheckMainList.find(settings.serviceAllSumBl)
                                                        .text(allCheckSum)
                                                        .data('allPrice', allCheckSum);
        $('#el'+$thisCheckId).find('.itesmPrice-js').text($dropFieldSum);

        var $eachCheckList = $thisCheckMainGlobal.find(settings.checkMainList);
        $eachCheckList.each(function(){
            var $eachCheckAllSum = $(this).find(settings.serviceAllSumBl).data('allPrice');

            if (!$eachCheckAllSum) {
                $eachCheckAllSum = 0;
            };

            allSumFinal += $eachCheckAllSum;
            
        });

        // формируем главную сумму
        $(settings.allSumBl)
                            .text(allSumFinal)
                            .data('sum', allSumFinal);
        $(settings.sumData).val(allSumFinal);
        var $submitData = $(settings.floatWinList).html();
        $(settings.sumHTML).val($submitData);
    });

    // появление развернутой боковой панели
    settings.floatCalcBl.on('click', function() {
        $(this).hide();
        settings.floatCalcWnd.show();
    });

    // эмуляция боковой кнопки на сабмит
    $(settings.floatSubmit).on('click', function(e) {
        e.preventDefault();
        $(settings.calc).submit();
    });

    // работа с конечной формой
    $(settings.calcEnd).on('submit', function(event) {
        $(settings.calcEndFields).each(function(){
            var data = $(this).val();
            if (data == '') {
                $(this).addClass(settings.errorClass);
                $(this).siblings('label').show();
                event.preventDefault();
            };
        });
    })
    .change(function(event) {
        $(settings.calcEndFields).each(function(){
            var data = $(this).val();
            if (!data) {
                $(this).addClass(settings.errorClass);
                event.preventDefault();
            }
            else{
                $(this).removeClass(settings.errorClass);
                $(this).siblings('label').hide();
            }
        });
    })
    .on('click', settings.close, function() {
        var $this = $(this),
            $thisNum = $this.siblings('.float-calc-item-info').children().text(),
            $allSumOldBl = $(this).closest(settings.calcEnd).find('.calc-end-sum-num-js'),
            $allSumOld = $allSumOldBl.text(),
            $allSum = parseInt($allSumOld) - parseInt($thisNum);
        $allSumOldBl
                    .text($allSum)
                    .siblings('input').val($allSum);
        $this.parent().remove();
    });

    // сброс формы
    $(settings.resetBl).on('click', function(event) {
        event.preventDefault();
        location.reload();
    });

    //защита от пустого сабмита
    $(settings.submitButton).on('click', function(event){
        var check = $(settings.calc).find(settings.mainCheckEl);
        if (!check.is(":checked")) {
            alert('Отметте услуги!');
            event.preventDefault();
        };
    });

    //проверка правильности ввода цифр в поля
    $(settings.numField).bind('keypress keyup', function(){
        var fieldValueTest = $(this).val();
        var rerun = /[^0-9.]/gi;
        if (rerun.test(fieldValueTest))
        {
            fieldValueTest = fieldValueTest.replace(rerun, '');
            $(this).val('0');
        }
    });

    // редактирование полей пр клике на закрыть

    $(settings.floatWinList).on('click', settings.close, function() {
    var $this = $(this),
        $thisParent = $this.parent(),
        $thisId = $thisParent.attr('id'),
        $id = $thisId.substr(2),
        $check = $(settings.calc).find('#' + $id),
        $thisDrop = $check.closest(settings.checkMainBl).find(settings.dopServises),
        $thisCheckMainGlobal = $check.closest(settings.calc), // До формы
        $thisCheckMainList = $check.closest(settings.checkMainList), // До списка главного,
        $thisCheckMainBl = $check.closest(settings.checkMainBl),
        allCheckSum = 0,
        allSumFinal = 0;

        $check
            .removeAttr('checked', false)
            .parent().removeClass('active');

        if ($check.hasClass('main-checkbox-js')) {
            if ($thisDrop.length > 0) {

                $thisDrop
                        .hide()
                        .find(settings.checkEl).removeAttr('checked', false)
                        .parent().removeClass('active');
                $('.dropMes'+$id).remove();
                
            };
        };

        $this.parent().remove();

        $thisCheckMainList.find(settings.checkEl).each(function(){
            var eachCkeckData = $(this).data('price'),
                eachCkeckProp = $(this).prop('checked');

            if (eachCkeckProp) {
                allCheckSum += eachCkeckData;
            };
        });

        //формируем местную сумму
        $thisCheckMainList.find(settings.serviceAllSumBl)
                                                        .text(allCheckSum)
                                                        .data('allPrice', allCheckSum);

        var $eachCheckList = $thisCheckMainGlobal.find(settings.checkMainList);
        $eachCheckList.each(function(){
            var $eachCheckAllSum = $(this).find(settings.serviceAllSumBl).data('allPrice');

            if (!$eachCheckAllSum) {
                $eachCheckAllSum = 0;
            };

            allSumFinal += $eachCheckAllSum;
            
        });

        // формируем главную сумму
        $(settings.allSumBl)
                            .text(allSumFinal)
                            .data('sum', allSumFinal);
        $(settings.sumData).val(allSumFinal);
        var $submitData = $(settings.floatWinList).html();
        $(settings.sumHTML).val($submitData);

        if (!$(settings.checkEl).is(":checked")) {
            settings.floatCalcWnd.hide();
        }
    });



    // $(settings.calc).on('change', settings.checkEl, function() {
    //     $thisCheckBl = $(this),
    //     $thisCheck = $thisCheckBl.prop('checked'),
    //     $checkID = $thisCheckBl.attr('id'),
    //     $checkVal = $thisCheckBl.val(),
    //     $checkPrice = $thisCheckBl.data('price'),
    //     $thisCheckMainList = $thisCheckBl.closest(settings.checkMainList),
    //     $thisCheckMainBl = $thisCheckBl.closest(settings.checkMainBl),
    //     $thisRelativesCheck = $thisCheckMainList.find(settings.checkEl),
    //     $thisDrop = $thisCheckMainBl.find(settings.dopServises),
    //     allCheckSum = 0,
    //     allCheckDropSum = 0,
    //     $dropFieldSum = 0;

    //     //работаем на глобальном уровне

    //     if ($thisCheck){

    //         if ($thisCheckBl.hasClass('main-checkbox-js')) {
    //             if ($thisDrop.length > 0) {
    //                 $thisDrop.show();
                    

    //                 if ($thisDrop.hasClass('service-item-dop-multiplication')) {
    //                     var $dropFields = $thisDrop.find(settings.numField),
    //                         $dropFieldVal = $dropFields.val(),
    //                         $dropFieldNum = $dropFields.data('number');
    //                     $dropFieldSum = $dropFieldVal * $dropFieldNum;
    //                     $dropFields.parent().find(settings.numSumBl).text($dropFieldSum);
    //                     $dropFields.closest(settings.checkMainBl).find(settings.checkEl).data('price', $dropFieldSum);
    //                 };
                    
    //             };
    //         };

    //         settings.allSum += $checkPrice;

    //         settings.allSum = settings.allSum + $dropFieldSum;


    //     }
    //     else{

    //         if ($thisCheckBl.hasClass('main-checkbox-js')) {
    //             if ($thisDrop.length > 0) {

    //                 var $thisDropCheckBl = $thisDrop.find(settings.checkEl);
    //                 $thisDropCheckBl.each(function(){
    //                     var eachCkeckDropData = $(this).data('price'),
    //                         eachCkeckDropProp = $(this).prop('checked');

    //                     if (eachCkeckDropProp) {
    //                         allCheckDropSum += eachCkeckDropData;
    //                     };

    //                 });

    //                 if ($thisDrop.hasClass('service-item-dop-multiplication')) {
    //                     var $dropFields = $thisDrop.find(settings.numField),
    //                         $dropFieldVal = $dropFields.val(),
    //                         $dropFieldNum = $dropFields.data('number'),
    //                         $dropFieldSum = $dropFieldVal * $dropFieldNum;
    //                 };

    //                 $thisDrop
    //                     .hide()
    //                     .find(settings.checkEl).removeAttr('checked', false).parent().removeClass('active');
    //             };
    //         };

    //         settings.allSum -= $checkPrice;

    //         settings.allSum = settings.allSum - allCheckDropSum - $dropFieldSum;
    //     };

    //     //формируем главную сумму
    //     $(settings.allSumBl)
    //                         .text(settings.allSum)
    //                         .data('sum', settings.allSum); 

    //     //появление бококвой панели

    //     if ($(settings.checkEl).is(":checked")) {
    //         settings.floatCalcBl.show();
    //     }
    //     else{
    //         settings.floatCalcBl.hide();
    //     };

    //     //работаем на месном уровне

    //     $thisRelativesCheck.each(function(){
    //         var eachCkeckData = $(this).data('price'),
    //             eachCkeckProp = $(this).prop('checked');

    //         if (eachCkeckProp) {
    //             allCheckSum += eachCkeckData;
    //         };
    //     });

    //     $thisCheckMainList.find(settings.serviceAllSumBl).text(allCheckSum); //формируем местную сумму

    // })
// .on('change', '.num-field', function(event) {
//         var $thisFiled = $(this),
//             $thisVal = $thisFiled.val(),
//             $thisNum = $thisFiled.data('number'),
//             $oldFieldSum = $(settings.allSumBl).data('sum');
//             newFieldSumDef = $thisVal * $thisNum;
//             newFieldSum = $oldFieldSum + newFieldSumDef;

//         $(settings.allSumBl)
//                             .text(newFieldSum)
//                             .data('sum', newFieldSum);
//     });




    // $(settings.fieldset).on('change', settings.checkEl, function() {
    //     $thisCheckBl = $(this),
    //     $thisCheck = $thisCheckBl.prop('checked'),
    //     $checkPrice = $thisCheckBl.data('price'),
    //     $thisCheckMainBl = $thisCheckBl.closest(settings.checkMainList),
    //     $serviceallSum = 0;

    //     if ($thisCheck){
    //         $serviceallSum += $checkPrice;
    //     }
    //     else{
    //         $serviceallSum -= $checkPrice;
    //     }

    //     $thisCheckMainBl.find(settings.serviceAllSumBl).text($serviceallSum);

    // });

        









    

    // var $allSum = 0,
    //     $key = true,
    //     $key2 = true,
    //     $itesmDropElsSum = 0;

    // $('.services-list').each(function(iv){
    //     $(this).find('.service-item').each(function(i){
    //     var $checkBl = $(this).find('.fake-check-js').find('.checkbox-js');
    //     $checkBl.on('change', function(){
    //         var $ThisEl = $(this),
    //             $fakeCheck = $ThisEl.prop('checked'),
    //             $fakeCheckId = $ThisEl.attr('id'),
    //             $itesmParent = $ThisEl.closest('.service-item'),
    //             $itesmDrop = $itesmParent.find('.service-item-dop-js'),
    //             $msg = $('<li class="float-calc-item" id="el'+ $fakeCheckId + '"></li>'),
    //             $serviceClose = $('<div class="float-calc-close"></div>'),
    //             $serviceName = $('<div class="float-calc-item-name left"></div>'),
    //             $servicePrice = $('<div class="float-calc-item-info right"></div>'),
    //             $calcWindow = $('.float-calc-window-js'),
    //             $itesmName = $ThisEl.closest('.service-item-body').find('.service-title').text(),
    //             $itesmPrice = $ThisEl.closest('.service-item-body').find('.service-price').data('price'),
    //             $allSumNew = $(this).closest('.services-list').find('.all-service-sum-js').text(),
    //             $allSum = parseInt($allSumNew),
    //             $itesmDropItDataSum = 0;

    //             if ($fakeCheck == true){
    //                 if ($itesmDrop.length > 0) {
    //                     $itesmDrop.find('input').val('0');
    //                     $itesmDrop.show();
    //                 };
    //                 $serviceName.append($itesmName);
    //                 $servicePrice.append('<span class="itesmPrice-js">' + $itesmPrice + '</span> р.');
    //                 $msg.append($serviceClose);
    //                 $msg.append($serviceName);
    //                 $msg.append($servicePrice);
    //                 $calcWindow.find('.float-calc-list').prepend($msg);
    //                 $allSum = $allSum + $itesmPrice;
    //             }
    //             else{
    //                 if ($itesmDrop.length > 0) {
    //                     if ($itesmDrop.hasClass('service-item-dop-fields')) {
    //                         $itesmDropIt = $itesmDrop.find('.service-item2');
    //                         $itesmDropIt.each(function(){
    //                             $itesmDropItDataCheck = $(this).find('.checkbox-js').prop('checked');
    //                             if ($itesmDropItDataCheck == true) {
    //                                 $itesmDropItData = $(this).find('.service-price').data('price');
    //                                 $itesmDropItDataSum += $itesmDropItData;
    //                             };
    //                         });
    //                         $itesmDrop.find('.service-item2').find('.checkbox-js').removeAttr('checked', false).parent().removeClass('active');
    //                         $key2 = false;
    //                     };
    //                     if ($itesmDrop.hasClass('service-item-dop-multiplication')) {
    //                         $itesmDropItDataSum = parseInt($itesmDrop.find('.num-sum-js').text());
    //                         $itesmDrop.find('input').val("0");
    //                         $itesmDrop.find('.num-sum-js').text("0");
    //                         $key = false;
    //                     };
    //                     $itesmDrop.hide();
    //                 };
    //                 $calcWindow.find('#el' + $fakeCheckId).remove();
    //                 $allSum = $allSum - $itesmPrice - $itesmDropItDataSum;
    //             }
    //             $ThisEl.closest('.services-list').find('.all-service-sum-js').text($allSum);
    //         });
    //     });
        
    // });
        
    // $('.num-field').bind('keypress keyup', function() 
    // {
    //     var fieldValueTest = $(this).val();
    //     var rerun = /[^0-9.]/gi;
    //     if (rerun.test(fieldValueTest))
    //     {
    //         fieldValueTest = fieldValueTest.replace(rerun, '');
    //         $(this).val('1');
    //     }
    // });

    // $itesmDropEls = $('.service-item-dop-fields').find('.service-item2').find('.checkbox-js');
    
    // $itesmDropEls.on('change', function(){

    //     if ($key2 == false) {
    //         $itesmDropElsSum = 0;
    //     }

    //     $thisDropEl = $(this),
    //     $thisDropElId = $(this).attr('id').substr(0,3),
    //     $thisDropElProp = $thisDropEl.prop('checked'),
    //     $thisDropElParents = $thisDropEl.closest('.service-item2'),
    //     $thisDropElPrice = $thisDropElParents.find('.service-price').data('price'),
    //     $thisDropElAllPriceEl = $(this).closest('.services-list').find('.all-service-sum-js'),
    //     $thisDropElAllPriceArr = $(this).closest('.services-list').find('.service-item'),
    //     $thisDropElAllPrice = $(this).closest('.service-item').find('.fake-check-js').siblings('.service-price').data('price'),
    //     $thisDropElAllPriceArrSum = 0;

    //     if ($thisDropElProp == true) {
    //         $itesmDropElsSum += $thisDropElPrice;
    //     }
    //     else{
    //         $itesmDropElsSum -= $thisDropElPrice;
    //     }

    //     if ($(this).closest('.services-list2').find('.checkbox-js').is(":checked") == false) {
    //         $itesmDropElsSum = 0;
    //     };

    //     $thisDropElAllPriceArr.each(function(){
    //         var el = $(this).find('.fake-check-js'),
    //             price = el.siblings('.service-price').data('price');
    //             check = el.children().prop('checked');
    //         if (check == true) {
    //             $thisDropElAllPriceArrSum += price;
    //         };
    //     });


    //     $thisDropElAllsum = $itesmDropElsSum + $thisDropElAllPriceArrSum;

    //     $thisDropElAllsumNext = parseInt($thisDropElAllPrice) + $itesmDropElsSum;

    //     $thisDropElAllPriceEl.text($thisDropElAllsum);
    //     $('#el' + $thisDropElId).find('.itesmPrice-js').text($thisDropElAllsumNext);

    //     var submitHtml = $('.float-calc-window-js').find('.float-calc-list').html(),
    //         submitData = $('.float-calc-window-js').find('.all-sum-js').text();

    //     $('.submit-form').find('.htmlData').val(submitHtml);
    //     $('.submit-form').find('.sumData').val(submitData);

    //     $key = true;
    //     $key2 = true;
    // });

    // $itesmDropMlt = $('.service-item-dop-multiplication').find('.num-field');
    // $itesmDropMlt.on('change', function() {
    //     if ($key == false) {
    //         $(this).data("old", "");
    //     }
    //     else{
    //         $(this).data("old", $(this).data("new") || "");
    //     }
    //     $(this).data("new", $(this).val());

    //     var $ThisMlt = $(this),
    //         $ThisMltPar = $(this).parent(),
    //         $ThisMltNum = $ThisMltPar.find('.num-number').data('number'),
    //         $ThisMltVal = $ThisMlt.data('new'),
    //         $ThisMltValOld = $ThisMlt.data('old'),
    //         $ThisMltAll = $ThisMlt.closest('.services-list').find('.all-service-sum-js'),
    //         $ThisMltAllOld = parseInt($ThisMltAll.text()) - $ThisMltNum * $ThisMltValOld,
    //         $ThisMltSum = $ThisMltVal * $ThisMltNum,
    //         $ThisMltSumAll = $ThisMltSum + $ThisMltAllOld,
    //         $ThisMltId = $ThisMlt.closest('.service-item-dop-js').siblings('div').find('.checkbox-js').attr('id');

    //         console.log($ThisMltVal);
    //         console.log($ThisMltValOld);


    //         $ThisMltPar.find('.num-sum-js').text($ThisMltSum);
    //         $ThisMltAll.text($ThisMltSumAll);
    //         $('#el' + $ThisMltId).find('.itesmPrice-js').text($ThisMltSum);
    //         $key = true;
    //         $key2 = true;



    //     var submitHtml = $('.float-calc-window-js').find('.float-calc-list').html(),
    //         submitData = $('.float-calc-window-js').find('.all-sum-js').text();

    //     $('.submit-form').find('.htmlData').val(submitHtml);
    //     $('.submit-form').find('.sumData').val(submitData);
    // });

    // $('.float-calc-list').on('click', '.float-calc-close', function(){
    //     var $closeClickedClass = $(this).parent().attr('id'),
    //         $closeClickedData = $(this).parent().find('.itesmPrice-js').text(),
    //         closeClickedID = $closeClickedClass.substr(2),
    //         $formCheckClose = $('.calc').find('.fake-check-js').children(),
    //         $formCheckThis = $('.calc').find('#' + closeClickedID),
    //         $formCheckThisAllSum = $formCheckThis.closest('.services-list').find('.all-service-sum-js').text(),
    //         $closeClickedAllSumBl = $(this).closest('.float-calc-window-js').find('.all-sum-js'),
    //         $closeClickedAllSum = parseInt($closeClickedAllSumBl.text()),
    //         $closeClickedAllSumNum = $closeClickedAllSum - parseInt($closeClickedData),
    //         $serviceItemDop = $formCheckThis.closest('.service-item').find('.service-item-dop-js');

    //         $closeClickedAllSumBl.text($closeClickedAllSumNum);
        
    //     $formCheckThis.closest('.service-item').find('.checkbox-js').removeAttr('checked', false).parent().removeClass('active');
    //     var formCheckThisSum = $formCheckThisAllSum - $closeClickedData;
    //     $formCheckThis.closest('.services-list').find('.all-service-sum-js').text(formCheckThisSum);
    //     $serviceItemDop.hide();
    //     $serviceItemDop.find('input').val("0");
    //     $serviceItemDop.find('.num-sum-js').text("0");
    //     $(this).parent().remove();
    //     if($formCheckClose.is(":checked") == false){
    //         $('.float-calc-block-js').hide();
    //         $('.float-calc-window-js').hide();
    //         $('.float-calc-window-js').find('.float-calc-item').find('li').remove();
    //         $('.service-item-dop-js').hide();
    //         $('.service-item-dop-multiplication').find('input').val("0");
    //         $('.service-item-dop-multiplication').find('.num-sum-js').text("0");
    //         $('.all-service-sum-js').text('0');
    //     }
    //     $key = true;
    //     $key2 = false;

    //     var submitHtml = $('.float-calc-window-js').find('.float-calc-list').html(),
    //         submitData = $('.float-calc-window-js').find('.all-sum-js').text();

    //     $('.submit-form').find('.htmlData').val(submitHtml);
    //     $('.submit-form').find('.sumData').val(submitData);
    // });

    // $('.calc').change(function() {
    //     var formCheck = $(this).find('.fake-check-js').children(),
    //         formSum = $(this).find('.all-service-sum-js'),
    //         formSumNum = 0;
    //     if(formCheck.is(":checked")){
    //         if ($('.float-calc-window-js').is(':visible') == false) {
    //             $('.float-calc-block-js').show();
    //         };
    //         formSum.each(function(){
    //             formSumAll = parseInt($(this).text());
    //             formSumNum += formSumAll;
    //         });
    //         $('.float-calc-block-js').find('.block-all-sum-js').text(formSumNum);
    //         $('.float-calc-window').find('.all-sum-js').text(formSumNum);
    //     }
    //     else{
    //         $('.float-calc-block-js').hide();
    //         $('.float-calc-window-js').hide();
    //         $('.float-calc-window-js').find('.float-calc-item').find('li').remove();
    //         $('.float-calc-block-js').find('.block-all-sum-js').text('0');
    //         $('.float-calc-window').find('.all-sum-js').text('0');
    //         $('.all-service-sum-js').text('0');
    //         $key = false;
    //         $key2 = false;
    //     }

    //     var submitHtml = $('.float-calc-window-js').find('.float-calc-list').html(),
    //         submitData = $('.float-calc-window-js').find('.all-sum-js').text();

    //     $('.submit-form').find('.htmlData').val(submitHtml);
    //     $('.submit-form').find('.sumData').val(submitData);

    // });

    // $('.float-calc-block-js').on('click', function() {
    //     $(this).hide();
    //     $('.float-calc-window-js').show();
    // });

    // $('.float-calc-submit').on('click', function(e) {
    //     e.preventDefault();
    //     $('.submit-form').submit();
    // });

    // $('.calc-end').on('submit', function(event) {
    //     $('.field2').each(function(){
    //         var data = $(this).val();
    //         if (data == '') {
    //             $(this).addClass('error');
    //             $(this).siblings('label').show();
    //             event.preventDefault();
    //         };
    //     });
    // });
    // $('.calc-end').change(function(event) {
    //     $('.field2').each(function(){
    //         var data = $(this).val();
    //         if (!data) {
    //             $(this).addClass('error');
    //             event.preventDefault();
    //         }
    //         else{
    //             $(this).removeClass('error');
    //             $(this).siblings('label').hide();
    //         }
    //     });
    // });

    // $('.calc-end').on('click', '.float-calc-close', function() {
    //     $this = $(this),
    //     $thisNum = $this.siblings('.float-calc-item-info').children().text(),
    //     $allSumOldBl = $(this).closest('.calc-end').find('.calc-end-sum-num-js'),
    //     $allSumOld = $allSumOldBl.text();
    //     $allSum = parseInt($allSumOld) - parseInt($thisNum);
    //     $allSumOldBl.text($allSum);
    //     $allSumOldBl.siblings('input').val($allSum);
    //     $this = $(this).parent().remove();
    // });

    // $('.float-calc-reset').on('click', function(event) {
    //     event.preventDefault();
    //     $('.float-calc-block-js').hide();
    //     $('.float-calc-window-js').hide();
    //     $('.float-calc-window-js').find('.float-calc-item').remove();
    //     $('.float-calc-block-js').find('.block-all-sum-js').text('0');
    //     $('.float-calc-window').find('.all-sum-js').text('0');
    //     $('.submit-form').find('.htmlData').val(0);
    //     $('.submit-form').find('.sumData').val(0);
    //     $('.checkbox-js').removeAttr('checked', false).parent().removeClass('active');
    //     $('.service-item-dop-js').hide();
    //     $('.all-service-sum-js').text('0');
    //     $key = false;
    //     location.reload();
    // });

    // $('.button-sumbit-js').on('click', function(event){
    //     var check = $('.calc').find('.fake-check-js').children();
    //     if (!check.is(":checked")) {
    //         alert('Отметте услуги!');
    //         event.preventDefault();
    //     };
    // });





























});
//Rotator for our reviews
$(document).ready(function(){   
    $(".reviews").easySlider({
        prevId:         'prevBtn5',
        prevText:       ' ',
        nextId:         'nextBtn5', 
        nextText:       ' ',
        auto: false, 
        continuous: true
    });
});
//Rotator for our customers
$(document).ready(function(){   
    $(".customers").easySlider({
        prevId:         'prevBtn6',
        prevText:       ' ',
        nextId:         'nextBtn6', 
        nextText:       ' ',
        auto: false, 
        continuous: true
    });
});
$(function(){
    $('#slider-id').liquidSlider({
    autoSlide:true,
    autoHeight:false
    });
});
//Start SiteHeart code
(function(){
var widget_id = 678982;
_shcp =[{widget_id : widget_id}];
var lang =(navigator.language || navigator.systemLanguage 
|| navigator.userLanguage ||"en")
.substr(0,2).toLowerCase();
var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
var hcc = document.createElement("script");
hcc.type ="text/javascript";
hcc.async =true;
hcc.src =("https:"== document.location.protocol ?"https":"http")
+"://"+ url;
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hcc, s.nextSibling);
})();
//End SiteHeart code 
