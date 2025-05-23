function step2() {
    const form = document.forms["registerForm"];
    const primary_phone_no = form["primary_phone_no"].value.trim();
    const alternative_phone_no = form["alternative_phone_no"].value.trim();
    const personalEmail = form["personalEmail"].value.trim();
    const officialEmail = form["officialEmail"].value.trim();

    const phoneRegex = /^\d{10}$/;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    
    if (!phoneRegex.test(primary_phone_no)) {
        alert("Please enter a valid Primary Phone Number.");
        return false;
    }

    if (!phoneRegex.test(alternative_phone_no)) {
        alert("Please enter a valid Alternative Phone Number.");
        return false;
    }

    if (!emailRegex.test(personalEmail)) {
        alert("Please enter a valid Personal Email.");
        return false;
    }

    if (!emailRegex.test(officialEmail)) {
        alert("Please enter a valid Official Email.");
        return false;
    }

    return true;
}


    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

    //   function step1() {
    //     const primary_phone_no = document.forms["registerForm"]["primary_phone_no"].value.trim();
    //     const alternative_phone_no = document.forms["registerForm"]["alternative_phone_no"].value.trim();
    //     const personalEmail = document.forms["registerForm"]["personalEmail"].value.trim();
    //     const officialEmail = document.forms["registerForm"]["officialEmail"].value.trim();
    //     const aadharcard_no = document.forms["registerForm"]["aadharcard_no"].value.trim();
    //     const panCard = document.forms["registerForm"]["panCard"].value.trim();
    //     const bank_acc_no = document.forms["registerForm"]["bank_acc_no"].value.trim();
    //     const ifsc_code = document.forms["registerForm"]["ifsc_code"].value.trim();
    //     const upiId = document.forms["registerForm"]["upiId"].value.trim();
    //     const emergency_phone_no = document.forms["registerForm"]["emergency_phone_no"].value.trim();

    //     const primPhoneRegex = /^\d{10}$/;
    //     const altPhoneRegex = /^\d{10}$/;
    //     const persEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const offEmailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    //     const aadharRegex = /^\d{12}$/;
    //     const panRegex = /^[A-Za-z]{5}\d{4}[A-Za-z]{1}$/;
    //     const bankAccRegex = /^\d+$/;
    //     const ifscRegex = /^[A-Za-z]{4}\d{7}$/;
    //     const upiRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+$/;
    //     const emergPhoneRegex = /^\d{10}$/;

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!altPhoneRegex.test(alternative_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //     if (!primPhoneRegex.test(primary_phone_no)) {
    //       alert("Please enter valid Phone Number.")
    //     }

    //   }

      