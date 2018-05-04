function UploadAwsDetails() {
  let riskTransaction = '';
  let database = firebase.database();
  let event = 'paymentorder.status.updated';
  let prev_status = 'pending';
  let next_status = document.getElementById("next_status").value;
  let clientid = document.getElementById("clientid").value;
  let address = document.getElementById("address").value;
  let amount = document.getElementById("amount").value;
  let amountpaid = document.getElementById("amountpaid").value;
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
      prev_status: prev_status,
      next_status: next_status,
      clientid: clientid,
      address: address,
      amount: amount,
      amountpaid: amountpaid,
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
