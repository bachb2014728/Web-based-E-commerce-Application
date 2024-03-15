const prices = document.querySelectorAll('#price'); 
  const VND = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }); 
  prices.forEach(price => { 
    const value = price.textContent; 
    price.textContent = VND.format(value);
  });

