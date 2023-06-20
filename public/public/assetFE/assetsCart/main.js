// function updateToCart(tag) {
//     let urlUpdateCart = $('.url_update_cart').data('url');
//     let id = $(tag).attr("data-id");
//     let quantity = tag ? tag.value : 0;
//     $.ajax({
//         type: "GET",
//         url: urlUpdateCart,
//         data: {
//             id: id,
//             quantity: quantity,
//         },
//         success:  function (data) {
//             console.log(data.priceTotal);
//             if (data.code === 200) {
//                 let arr = Object.values(data.carts);
//                 let html = arr.map((value, id) => {
//                     console.log(value);
//                     return `
//                         <tr>
//                             <td class="p-4">
//                                 <div class="media align-items-center">
//                                     <img src="${value.image}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
//                                     <div class="media-body">
//                                         <a href="#" class="d-block text-dark">${value.name}</a>
//                                     </div>
//                                 </div>
//                             </td>
//                             <td class="text-right font-weight-semibold align-middle p-4">${value.price} VNĐ</td>
//                             <td class="align-middle p-4"><input type="number" min="1" class="form-control text-center update_cart update_quantity_cart" data-id=${value.id} onchange="updateToCart(this)" value="${value.quantity}"></td>
//                             <td class="text-right font-weight-semibold align-middle p-4 update_total_cart">${value.total} VNĐ</td>
//                             <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">x</a></td>
//                         </tr>  
//                     `
//                     console.log(html);
//                 });
//                 $('.view_cart').html(html);
//                 $('#total_price').html(data.priceTotal +" VNĐ");

//             }
//         },
//         error: function (data) {
//         }
//     });
// }
// $(function() {
//     $('.update_cart').on('change', updateToCart);
// });

// function loadPage() {
//     let num = Number.prototype.toLocaleString('it-IT')
//     let a = {!! json_encode(session()->get('cart')) !!};
//     let arr = Object.values(a);
//     let html = arr.map((value, id) => {
//         console.log(value.price.num);
//         return `
//             <tr>
//                 <td class="p-4">
//                     <div class="media align-items-center">
//                         <img src="${value.image}" class="d-block ui-w-40 ui-bordered mr-4" alt="">
//                         <div class="media-body">
//                             <a href="#" class="d-block text-dark">${value.name}</a>
//                         </div>
//                     </div>
//                 </td>
//                 <td class="text-right font-weight-semibold align-middle p-4">${value.price} VNĐ</td>
//                 <td class="align-middle p-4"><input type="number" min="1" class="form-control text-center update_cart update_quantity_cart" data-id=${value.id} onchange="updateToCart(this)" value="${value.quantity}"></td>
//                 <td class="text-right font-weight-semibold align-middle p-4 update_total_cart">${value.total} VNĐ</td>
//                 <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">x</a></td>
//             </tr>  
//         `
//     });
//     $('.view_cart')[0].innerHTML = html;
// }
// loadPage();

// function totalPrice() {
//     let totalPrice = {!! json_encode(session()->get('total_price')) !!};
//     $('#total_price').html(totalPrice +" VNĐ");
// }
// totalPrice();