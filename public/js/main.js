var log = console.log



Livewire.on('urlChange', param => {
    history.pushState(null, null, param);
})



// {"fingerprint":{"id":"sVpEEa4FTLm5hIpf4aE2","name":"add-to-cart-button","locale":"en","path":"product\/32392530-70","method":"GET","v":"acj"},
// "effects":{"listeners":[]},"serverMemo":{"children":[],"errors":[],"htmlHash":"b9451759",
// "data":{"addToCartCount":1,"product":[],"showCartLink":false,"productCartCount":null},
// "dataMeta":{"models":{"product":{"class":"App\\Models\\Product","id":1802,"relations":["gallery"],"connection":"mysql","collectionClass":null}}},
// "checksum":"8ce3c8f089e4f5b39f4db7b275a052255b7e70bb8611213e9fc28af60f058aca"}}
