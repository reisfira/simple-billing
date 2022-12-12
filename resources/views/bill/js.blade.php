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
        console.log('success')
        console.log(response)
    }).fail(error => {
        console.log('failed')
        console.log(error)
    })
})

$('.item-code').on('change', function() {
    console.log($(this).val())

    $.ajax({
        url: $('.js-params').data('item-select-api'),
        method: 'POST',
        data: {
            item_code: $(this).val()
        }
    }).done(response => {
        $('.price').val(response.resource.price).trigger('change')

        console.log('success')
        console.log(response)
    }).fail(error => {
        console.log('failed')
        console.log(error)
    })
})

let calculateItemAmount = function(quantity, price) {
    return parseFloat(quantity) * parseFloat(price);
}

$('.trigger-calculate-item-amount').on('keyup change', function() {
    console.log('test calculate call')

    let amount = calculateItemAmount($('.quantity').val(), $('.price').val())
    $('.amount').val(amount)
})
