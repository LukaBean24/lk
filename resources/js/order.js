let super_ecto_100 = document.getElementById('super_ecto_100')
let super_ecto = document.getElementById('super_ecto')
let premium = document.getElementById('premium')
let regular = document.getElementById('regular')
let diesel = document.getElementById('diesel')
let sum = document.getElementById('sum')

let super_ecto_100_price = document.getElementById('super_ecto_100_price')
let super_ecto_price = document.getElementById('super_ecto_price')
let premium_price = document.getElementById('premium_price')
let regular_price = document.getElementById('regular_price')
let diesel_price = document.getElementById('diesel_price')

let discount1 = document.getElementById("50_150")
let discount2 = document.getElementById("150_500")
let discount3 = document.getElementById("500_1000")
let discount4 = document.getElementById("1000_5000")
let discount5 = document.getElementById("5000_15000")

super_ecto_100.oninput = function () {
    full = parseInt(super_ecto_100.value) + parseInt(super_ecto.value) + parseInt(premium.value) + parseInt(regular.value) + parseInt(diesel.value);
    if (full >= 50 && full <= 150) {
        document.getElementById('discount').value = discount1.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount1.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount1.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount1.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount1.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount1.value))).toFixed(2)
    } else if (full < 50) {
        sum.value = "შეკვეთა შეუძლებელია"
    } else if (full > 150 && full <= 500) {
        document.getElementById('discount').value = discount2.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount2.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount2.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount2.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount2.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount2.value))).toFixed(2)
    }
    else if (full > 500 && full <= 1000) {
        document.getElementById('discount').value = discount3.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount3.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount3.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount3.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount3.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount3.value))).toFixed(2)
    }
    else if (full > 1000 && full <= 5000) {
        document.getElementById('discount').value = discount4.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount4.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount4.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount4.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount4.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount4.value))).toFixed(2)
    }
    else if (full > 5000) {
        document.getElementById('discount').value = discount5.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount5.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount5.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount5.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount5.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount5.value))).toFixed(2)
    }
    document.getElementById('sum_liter').value = full;
}

super_ecto.oninput = function () {
    full = parseInt(super_ecto_100.value) + parseInt(super_ecto.value) + parseInt(premium.value) + parseInt(regular.value) + parseInt(diesel.value);
    if (full >= 50 && full <= 150) {
        document.getElementById('discount').value = discount1.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount1.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount1.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount1.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount1.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount1.value))).toFixed(2)
    } else if (full < 50) {
        sum.value = "შეკვეთა შეუძლებელია"
    } else if (full > 150 && full <= 500) {
        document.getElementById('discount').value = discount2.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount2.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount2.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount2.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount2.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount2.value))).toFixed(2)
    }
    else if (full > 500 && full <= 1000) {
        document.getElementById('discount').value = discount3.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount3.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount3.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount3.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount3.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount3.value))).toFixed(2)
    }
    else if (full > 1000 && full <= 5000) {
        document.getElementById('discount').value = discount4.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount4.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount4.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount4.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount4.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount4.value))).toFixed(2)
    }
    else if (full > 5000) {
        document.getElementById('discount').value = discount5.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount5.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount5.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount5.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount5.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount5.value))).toFixed(2)
    }
    document.getElementById('sum_liter').value = full;
}
premium.oninput = function () {
    full = parseInt(super_ecto_100.value) + parseInt(super_ecto.value) + parseInt(premium.value) + parseInt(regular.value) + parseInt(diesel.value);
    if (full >= 50 && full <= 150) {
        document.getElementById('discount').value = discount1.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount1.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount1.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount1.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount1.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount1.value))).toFixed(2)
    } else if (full < 50) {
        sum.value = "შეკვეთა შეუძლებელია"
    } else if (full > 150 && full <= 500) {
        document.getElementById('discount').value = discount2.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount2.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount2.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount2.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount2.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount2.value))).toFixed(2)
    }
    else if (full > 500 && full <= 1000) {
        document.getElementById('discount').value = discount3.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount3.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount3.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount3.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount3.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount3.value))).toFixed(2)
    }
    else if (full > 1000 && full <= 5000) {
        document.getElementById('discount').value = discount4.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount4.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount4.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount4.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount4.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount4.value))).toFixed(2)
    }
    else if (full > 5000) {
        document.getElementById('discount').value = discount5.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount5.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount5.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount5.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount5.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount5.value))).toFixed(2)
    }
    document.getElementById('sum_liter').value = full;
}
diesel.oninput = function () {
    full = parseInt(super_ecto_100.value) + parseInt(super_ecto.value) + parseInt(premium.value) + parseInt(regular.value) + parseInt(diesel.value);
    if (full >= 50 && full <= 150) {
        document.getElementById('discount').value = discount1.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount1.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount1.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount1.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount1.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount1.value))).toFixed(2)
    } else if (full < 50) {
        sum.value = "შეკვეთა შეუძლებელია"
    } else if (full > 150 && full <= 500) {
        document.getElementById('discount').value = discount2.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount2.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount2.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount2.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount2.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount2.value))).toFixed(2)
    }
    else if (full > 500 && full <= 1000) {
        document.getElementById('discount').value = discount3.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount3.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount3.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount3.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount3.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount3.value))).toFixed(2)
    }
    else if (full > 1000 && full <= 5000) {
        document.getElementById('discount').value = discount4.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount4.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount4.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount4.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount4.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount4.value))).toFixed(2)
    }
    else if (full > 5000) {
        document.getElementById('discount').value = discount5.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount5.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount5.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount5.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount5.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount5.value))).toFixed(2)
    }
    document.getElementById('sum_liter').value = full;
}
regular.oninput = function () {
    full = parseInt(super_ecto_100.value) + parseInt(super_ecto.value) + parseInt(premium.value) + parseInt(regular.value) + parseInt(diesel.value);
    if (full >= 50 && full <= 150) {
        document.getElementById('discount').value = discount1.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount1.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount1.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount1.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount1.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount1.value))).toFixed(2)
    } else if (full < 50) {
        sum.value = "შეკვეთა შეუძლებელია"
    } else if (full > 150 && full <= 500) {
        document.getElementById('discount').value = discount2.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount2.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount2.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount2.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount2.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount2.value))).toFixed(2)
    }
    else if (full > 500 && full <= 1000) {
        document.getElementById('discount').value = discount3.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount3.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount3.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount3.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount3.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount3.value))).toFixed(2)
    }
    else if (full > 1000 && full <= 5000) {
        document.getElementById('discount').value = discount4.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount4.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount4.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount4.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount4.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount4.value))).toFixed(2)
    }
    else if (full > 5000) {
        document.getElementById('discount').value = discount5.value
        sum.value = (parseInt(super_ecto_100.value) * (parseFloat(super_ecto_100_price.value) - parseFloat(discount5.value)) + parseInt(super_ecto.value) * (parseFloat(super_ecto_price.value) - parseFloat(discount5.value)) + parseInt(premium.value) * (parseFloat(premium_price.value) - parseFloat(discount5.value)) + parseInt(regular.value) * (parseFloat(regular_price.value) - parseFloat(discount5.value)) + parseInt(diesel.value) * (parseFloat(diesel_price.value) - parseFloat(discount5.value))).toFixed(2)
    }
    document.getElementById('sum_liter').value = full;
}
