function UploadAwsDetails() {
  let riskTransaction = '';
  let database = firebase.database();
  let event = 'paymentorder.amount.updated';
  let clientid = document.getElementById("clientid").value;
  let address = document.getElementById("address").value;
  let prev_amount = document.getElementById("prev_amount").value;
  let next_amount = document.getElementById("next_amount").value;
  let rate = document.getElementById("rate").value;
  let createdat = '2018-02-07 15:23:40.176910';
  let lowFee = document.querySelector('input[name="optradio"]:checked').value;
  if (lowFee === 'true') {
    riskTransaction = true;
  } else {
    riskTransaction = false;
  }


  if (1) {
    const options = {
      event: event,
      amount: prev_amount,
      amountpaid: next_amount,
      clientid: clientid,
      address: address,
      rate: rate,
      riskTransaction: riskTransaction,
      createdat: createdat,
    }
    firebase.database().ref("Transactions").push(options, function(error) {
      if (error !== null) {
        alert("Some Error Occured Try Again");
      }else{
        alert("Configuration Uploaded SucessFully");
      }
    });
  } else {
    document.getElementById("Error").innerHTML = "<p class=" + "bg-danger" + ">Error!! Fill Empty Fields</p>";
  }
}
