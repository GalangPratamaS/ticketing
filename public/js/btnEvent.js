$(document.body).on('click', 'button.btn-number', function(e) {
    // alert ('button ' + this.id + ' clicked');
    e.preventDefault();

                      fieldName = $(this).attr('data-field');
                      ticketName = $(this).attr('data-ticket');
                      ticketId = $(this).attr('data-id-ticket');
                      type = $(this).attr('data-type');
                      var input = $("input[name='" + fieldName + "']");
                      var currentVal = parseInt(input.val());
                      if (!isNaN(currentVal)) {
                          if (type == 'minus') {
                              if (currentVal > input.attr('min')) {
                                  input.val(currentVal - 1).change();
                              }
                              if (parseInt(input.val()) == input.attr('min')) {
                                //kalau tiket yg dipilih kurang dari 1 atau = 0
                                  $(this).attr('disabled', true);
                              }

                          } else if (type == 'plus') {

                              if (currentVal < input.attr('max')) {
                                  input.val(currentVal + 1).change();
                              }
                              if (parseInt(input.val()) == input.attr('max')) {
                                  $(this).attr('disabled', true);
                              }

                          }
                      } else {
                          input.val(0);
                      }
});


                  $('.input-number').focusin(function () {
                      $(this).data('oldValue', $(this).val());
                  });

                //   $('.input-number').on('change', function () {
                    $(document.body).on('change', 'input.input-number', function(e) {
                      var el = $(this);
                      minValue = parseInt($(this).attr('min'));
                      maxValue = parseInt($(this).attr('max'));
                      valueCurrent = parseInt($(this).val());

                      name = $(this).attr('name');
                      if (valueCurrent >= minValue) {
                          $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
                          changeVal(el);
                      } else {
                          alert('Sorry, the minimum value was reached');
                          $(this).val($(this).data('oldValue'));
                      }
                      if (valueCurrent <= maxValue) {
                          changeVal(el);
                          $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled');
                          $('#btn_payment').removeAttr('disabled');
                      } else {
                          alert('Sorry, the maximum value was reached');
                          $(this).val($(this).data('oldValue'));
                      }
                      if (valueCurrent < 1) {
                          changeVal(el);
                          $(this).parent().children(".showButton").css = 'block';
                          $(this).parent().children(".qtyControl").css = 'none';
                          // $(".qtyControl").hide(); 
                          $('#btn_payment').attr('disabled', true);
                      }
                  });


                //   $(".input-number").on('keydown', function (e) {
                  $(document.body).on('keydown', 'input.input-number', function(e) {
                      // Allow: backspace, delete, tab, escape, enter and .
                      if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                          // Allow: Ctrl+A
                          (e.keyCode == 65 && e.ctrlKey === true) ||
                          // Allow: home, end, left, right
                          (e.keyCode >= 35 && e.keyCode <= 39)) {
                          // let it happen, don't do anything
                          return;
                      }
                      // Ensure that it is a number and stop the keypress
                      if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                          e.preventDefault();
                      }
                  });

                  $('.btn_add').on('click', function (e) {
                      e.preventDefault();
                      if ($('.qtyControl').css('display') == 'none') {
                          $(this).css('display', 'block');
                          $(this).css('display', 'none');
                      } else {
                          $('.qtyControl').css('display', 'none');
                      }

                  });

                  var check = false;

                  function changeVal(el) {
                      var qt = parseFloat(el.parent().children(".qt").val());
                      var price = parseFloat(el.parent().children(".price").val());

                      //   console.log(qt);
                        // console.log(price);
                      var eq = Math.round(price * qt * 100) / 100;

                      el.parent().children(".full-price").val(eq);

                      changeTotal();
                  }

                  function changeTotal() {

                      var prices = 0;
                      var qty = 0;
                      var cc = 0;

                      $(".full-price").each(function (index) {

                          prices += parseFloat($(".full-price").eq(index).val());
                      });

                      $(".qt").each(function (index) {
                          qty += parseFloat($(".qt").eq(index).val());
                          $('#total_qty').val(qty);
                      });
                                          
                      prices = Math.round(prices * 100) / 100;

                      var fullPrice = parseFloat(prices);

                      if (prices == 0) {
                          fullPrice = 0;
                      }
                      cc = fullPrice * 0.03 + 1665;

                      $('#total_price').val(fullPrice);
                      console.log('biaya cc = ' + cc);

                      $(".all_qty span").html(qty);
                      $(".total span").html(fullPrice);
                        }

                    $('input:radio[name="payment_method"]').on('change',
                        function(){
                            if (this.checked) {
                                        
                                var total_harga = parseFloat($('#total_price').val());
                                console.log('admin adalah ' + parseFloat(total_harga));   
                                var fee;
                                var payment= this.value;
                                if(payment === 'bank_transfer'){
                                    fee = 5000;
                                } else if(payment === 'credit_card') {
                                    fee = total_harga *  0.03 + 1665;
                                }
                                else {
                                    //qris gopay
                                    fee = total_harga *  0.03;
                                }
                                var grand_total = parseFloat(total_harga + parseFloat(fee));
                                $("#biaya_admin").val(fee);
                                $(".admin_fee span").html("Biaya admin Rp."+ fee);
                                $(".grand span").html("Grand total Rp."+ grand_total);
                                $("#grand_total").val(grand_total);
                                $('#btn_lanjutkan').prop("disabled", false);

                            }
                    });