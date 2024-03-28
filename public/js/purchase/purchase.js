var productCount = $("#tblPurchase tbody").find('tr').length
$('#purchaseCount').text(productCount);

var delay;

$('.input-search').on('input', function() {
    var q = $(this).val();
    clearTimeout(delay);
    console.log(q)
    delay = setTimeout(function() {
            $.ajax({
                type: "GET",
                url: '/product/search',
                data: {q:q,module:'purchase'},
                success: function(res){
                    console.log(res.length)
                    var markup = '';
                    res.forEach(row => {
                        markup += `<tr id="`+row.id+`">
                                    <td>`+row.name+`</td>
                                    <td>`+row.brand+`</td
                                    </tr>`
                    });

                    if(res.length == 0) {
                        markup = `<tr>
                                    <td colspan="2" class="text-center">No product found.</td
                                    </tr>`
                    }

                    tableBody = $("#tblResult tbody");
                    tableBody.empty();
                    tableBody.append(markup);

                    $('#resultCount').text(res.length);
                }
            });
        }, 500);

})

$('#tblResult tbody').on( 'click', 'tr', function () {
    var currentRow=$(this).closest("tr");
    var id = currentRow.attr('id');

    addToList(id)
} );

function addToList(id) {
    $.ajax({
        url: '/purchase/purchase-list',
        method: 'POST',
        data: { id:id },
        success: function(res) {
            console.log(res.purchase_list)
            fillTableData(res);
        },
        error: function(res) {
            console.log(res)
        }
    })
}

function fillTableData(res) {
    var items = res.purchase_list
    var markup = '';

    Object.entries(items).forEach(([key, value]) => {
        var row = value.item;

        markup += `<tr id="`+row.id+`">
                    <td width="50%">`+row.name+`</td>
                    <td><input type="number" min="1" class="form-control text-right product-quantity" id="quantity`+row.id+`" oninput="updatePurchaseDetailsInputs(`+row.id+`)" value="`+value.quantity+`"/></td>
                    <td><input type="number" min="0" class="form-control text-right product-amount" id="amount`+row.id+`" oninput="updatePurchaseDetailsInputs(`+row.id+`)" value="`+value.amount+`" /></td>
                    <td><input type="text" class="form-control text-right product-total-amount" id="total_amount`+row.id+`" value="`+value.total_amount+`" readonly/></td>
                    <td><button type="button" class="btn btn-xs btn-outline-danger d-block" id="remove`+row.id+`" onclick="removeProduct(`+row.id+`)"><i class="fa fa-trash mr-0"></i></button></td>
                </tr>`;

    })

    tableBody = $("#tblPurchase tbody");
    tableBody.empty();
    tableBody.append(markup);

    var purchaseCount = tableBody.find('tr').length
    $('#purchaseCount').text(purchaseCount);
}

function updatePurchaseDetailsInputs(id) {
    var quantity = $('#quantity'+id).val()
    var amount = $('#amount'+id).val()
    var total_amount = quantity * amount
    console.log(quantity +'*'+ amount +'='+ total_amount)
    $('#total_amount'+id).val(total_amount)

    document.getElementById('quantity'+id).defaultValue = quantity
    document.getElementById('amount'+id).defaultValue = amount
    document.getElementById('total_amount'+id).defaultValue = total_amount

    $.ajax({
        url: '/purchase/update-purchase-list',
        method: 'POST',
        data: { id:id, quantity:quantity, amount:amount, total_amount:total_amount  },
        success: function(res) {
            // fillTableData(res);
        },
        error: function(res) {
            console.log(res)
        }
    })
}

function removeProduct(id) {
    $.ajax({
        type: "DELETE",
        url: '/purchase/remove-purchase-list',
        data: { id },
        success: function(res) {
            fillTableData(res)
        },
        error: function (error) {
            toastr["error"](JSON.parse(error.responseText).message)
        }
    });
}

$('.cancel-purchase').on('click', function() {
    $.ajax({
        type: "DELETE",
        url: '/purchase/cancel-purchase',
        data: {},
        success: function(res) {
            window.location.href = '/purchase'
        },
        error: function (error) {
            toastr["error"](JSON.parse(error.responseText).message)
        }
    });
})

$('#transaction_date').datepicker({
    autoclose: true,
});
