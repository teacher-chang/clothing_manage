(function ($) {
    $.fn.extend({
        spinner: function (options) {
            return this.each(function () {
                var defaults = {
                    value: 1,
                    min: 1,
                    step: 1
                };

                var leastnum=$("input[name='leastmin']").val();  //最低购买量
                if(leastnum != 0){
                    var defaults = {value:leastnum, min:leastnum,step:1}
                }else{
                    var defaults = {value:1, min:1,step:1}
                }     

                var _this = $(this);

                var opts = $.extend(defaults, options);

                opts.step = _this.data("step") != null ? _this.data("step") : opts.step;

                opts.min = _this.data("min")!=null? _this.data("min"):opts.min;
                opts.max = _this.data("max") != null ? _this.data("max") : opts.max;                
                opts.value = _this.val() != "" ? _this.val() : opts.value;
                if (opts.value > opts.max || opts.value < opts.min) {
                    opts.value = opts.max;
                }
                var container = $('<span></span>').addClass('spin-text');
                var textField = _this.addClass('spin-val').val(opts.value).css("ime-mode","Disabled").keypress(function () {
                    return (/[\d]/.test(String.fromCharCode(event.keyCode)));
                }).bind("copy cut paste",function(e){
                    return false;
                });
                var decreaseBtn = $('<a class="decrease" href="javascript:void(0)">-</a>').click(function () {
                    changeValue(-1) 
                });
                var increaseBtn = $('<a class="increase" href="javascript:void(0)">+</a>').click(function () { 
                    changeValue(1)
                });
                textField.before(decreaseBtn).after(increaseBtn);

                textField.add(increaseBtn).add(decreaseBtn).wrapAll(container);

                function changeValue(d) {
                    var value = parseInt(textField.val());

                    if (isNaN(value))
                    {
                        value = opts.min;
                    }
                    var _val = value + d * opts.step;
                   
                    if (_val >= opts.min) {
                        value = _val;
                    }                                
                    textField.val(value);
                    $('#m-number').val(value);  //传递给php的购买数量的值赋予在id为m-number的input上

                    var change_now_spinner = parseInt($('.spinnerExample').val());
                    //alert(change_now_spinner);
                    var stocks = $('#stock').val();
                    var change_attr1 = $('#u-attr1').val();
                    var change_attr2 = $('#u-attr2').val();
                    var leastnum = $("#leastnum").val();

                    if(parseInt($('.spinnerExample').val())==parseInt(leastnum) || parseInt($('.spinnerExample').val())<=1){
                        $('.decrease').attr('disabled', 'disabled');
                        $('.decrease').css({'color':'#999'}); 
                    }else{
                        $('.decrease').attr('disabled', false);
                        $('.decrease').css({'color':'#333'}); 
                    }
                                                           
                    if(change_attr1==-1 && change_attr2==-1){
                        if(change_now_spinner>=parseInt(stocks)+1){
                            $('#m-number').val(stocks);
                            $('.spinnerExample').val(stocks);
                            layer.open({
                            title: [
                                '提示',
                                'background-color:#F37703; color:#fff;'
                            ],
                            content: kc+'不足，最多还只能购买'+stocks+'个!'
                            });
                        }
                    }else{
                        if(change_now_spinner>=parseInt(mulprice[change_attr1+'_'+change_attr2]['stock'])+1){
                            $('.spinnerExample').val(mulprice[change_attr1+'_'+change_attr2]['stock']);
                            $('#m-number').val(mulprice[change_attr1+'_'+change_attr2]['stock']);
                            layer.open({
                            title: [
                                '提示',
                                'background-color:#F37703; color:#fff;'
                            ],
                            content: kc+'不足，最多还只能购买'+mulprice[change_attr1+'_'+change_attr2]['stock']+'个!'
                            });
                        }
                    }
                    if(parseInt($('.spinnerExample').val())==parseInt(leastnum) || parseInt($('.spinnerExample').val())<=1){
                        $('.decrease').attr('disabled', 'disabled');
                        $('.decrease').css({'color':'#999'}); 
                    }else{
                        $('.decrease').attr('disabled', false);
                        $('.decrease').css({'color':'#333'}); 
                    }                    
                }
            });
        }
    });

})(jQuery);