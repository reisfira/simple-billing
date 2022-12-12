$('.customer-code').on('change', function() {
    console.log($(this).val())

    $.ajax({
        url: $('.js-params').data('customer-select-api'),
        method: 'POST',
        data: {
            customer_code: $(this).val()
        }
    }).done(response => {
        $('.customer-name').val(response.resource.name)
    }).fail(error => {
        console.log('failed')
        console.log(error)
    })
})

$('#bill-item-table').on('change', '.item-code', function() {
    let row = $(this).parents('tr')

    $.ajax({
        url: $('.js-params').data('item-select-api'),
        method: 'POST',
        data: {
            item_code: $(this).val()
        }
    }).done(response => {
        row.find('.price').val(response.resource.price).trigger('change')

        let grandTotal = calculateGrandTotal()
        $('.grand-total').val(grandTotal)
    }).fail(error => {
        console.log('failed')
        console.log(error)
    })
})

let calculateItemAmount = function(quantity, price) {
    return parseFloat(quantity) * parseFloat(price);
}

$('#bill-item-table').on('keyup change', '.trigger-calculate-item-amount', function() {
    let row = $(this).parents('tr')
    let quantity = row.find('.quantity').val()
    let price = row.find('.price').val()

    let amount = calculateItemAmount(quantity, price)
    row.find('.amount').val(amount)

    let grandTotal = calculateGrandTotal()
    $('.grand-total').val(grandTotal)
})

$('.btn-add-row').on('click', function() {
    let row = $('.row-template').clone().removeClass('row-template d-none')
    row.find('.select2-dynamic').select2({
        theme: 'bootstrap4',
        width: '100%',
        dropdownAutoWidth: true,
    }).attr('required', true)
    let lineNo = $('#bill-item-table').find('tbody').find('tr').length
    row.find('.line-no').val(lineNo)

    $('#bill-item-table').find('tbody').append(row)
})

$('#bill-item-table').on('click', '.btn-remove-row', function() {
    let row = $(this).parents('tr')
    row.remove()
})

let calculateGrandTotal = function() {
    let grandTotal = 0
    $.each($('#bill-item-table').find('tbody').find('tr'), function() {
        let amount = parseFloat($(this).find('.amount').val())
        console.log({
            line: $(this).find('.line-no').val(),
            amount: amount,
        })
        grandTotal += amount
    })

    console.log('trigger grand total')
    console.log(grandTotal)

    return grandTotal
}
