
                      <div class="items">
                      <p class="ticket-title">'+ item.ticket_name +'</p>  <br>                    
                    <p class="ticket-description"> <i class="bi bi-clock"></i> ' +item.ticket_date+ '  , 16.00 - 22.00 WIB  </p>
                    <div class="readmore">
                      <p class="ticket-description">Syarat dan ketentuan</p>
                      <ol>
                        <li class="ticket-description"><p >Tiket hanya berlaku sesuai kebijakan</p></li>
                        <li class="ticket-description"><p>Tiket masuk belum termasuk tiket konser</p></li>
                        <li class="ticket-description"><p>Tiket berlaku 1 kali kunjungan</p></li>
                        <li class="ticket-description"><p>Tiket tidak dapat dikembalikan (non refundable)</p></li>
                      </ol>
                    </div>
                    

                    <br>
                    <div class="d-flex flex-row-reverse bd-highlight">
                      <div class="p-2 bd-highlight qtyControl" style="width: 115px !important;">
                        <div class="input-group input-group-sm">
                        <button class="btn btn-outline-primary btn-number" type="button" disabled="disabled"
                          data-type="minus" data-ticket="'+item.ticket_name+ '" data-id-ticket="'+item.id+'" data-field="quant['+item.id+']">
                          <i class="bx bx-minus"></i>
                        </button>
                        <input type="text"  name="quant['+item.id+']" class="form-control input-sm input-number qt" value="0" min="0"
                          max="10">
                        <input type="hidden" name="'+item.id+'" value="'+tiket.id+'">
                        <input type="hidden" name="price['+item.id+']" class="input-number price" value="'+ item.ticket_price +'">
                        <input type="hidden" name="fullprice['+ticket.id+']" class="input-number full-price" value="0">
                        <button class="btn btn-outline-primary btn-number" data-type="plus" data-ticket="'+item.ticket_name+'" data-id-ticket="'+item.id+'" data-field="quant['+ticket.id+']">
                          <i class="bx bx-plus"></i>
                        </button>
                      </div>
                      </div>
                      
                       <div class="p-2 bd-highlight"><p class="mr-2">Rp. @{{ ticket.ticket_price }} </p> </div>                      
                    </div>
                    <hr>
 
                    </div>
                  