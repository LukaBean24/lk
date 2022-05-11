require('./bootstrap');

// Navbar dropdowns

document.getElementById('cabinet').onmouseover = function () {
    document.getElementById('cabinet-down').style.display = 'flex'
}

document.getElementById('cabinet-down').onmouseleave = function () {
    document.getElementById('cabinet-down').style.display = 'none'
}

document.getElementById('company').onmouseover = function () {
    document.getElementById('company-down').style.display = 'flex'
}

document.getElementById('company-down').onmouseleave = function () {
    document.getElementById('company-down').style.display = 'none'
}

// Register Radios

document.getElementById('person_radio').onclick = function () {
    document.getElementById('company_name').style.display = 'none'
    document.getElementById('customer_id').innerHTML = 'პირადი ნომერი'
}

document.getElementById('company_radio').onclick = function () {
    document.getElementById('company_name').style.display = 'flex'
    document.getElementById('customer_id').innerHTML = 'საიდენტიფიკაციო ნომერი'
    document.getElementById('customer_last').innerHTML = 'დირექტორის გვარი'
    document.getElementById('customer_name').innerHTML = 'დირექტორის სახელი'
}
