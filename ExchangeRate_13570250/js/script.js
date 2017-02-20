function DropDown(el) {
                this.Op_Money = el;
                this.initEvents();
            }
            DropDown.prototype = {
                initEvents : function() {
                    var obj = this;

                    obj.Op_Money.on('click', function(event){
                        $(this).toggleClass('active');
                        event.stopPropagation();
                    }); 
                }
            }

            $(function() {

                var Op_Money = new DropDown( $('#Op_Money') );

                $(document).click(function() {
                    // all dropdowns
                    $('.Op_M').removeClass('active');
                });

            });
}