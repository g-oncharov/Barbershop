function validateRegistration(obj){
let return_value = true;

const reg_login = /^[a-z][a-z0-9_\.]{2,30}$/;
const reg_tel = /^[0-9+\.]{4,20}$/;;
const reg_pass = /^[a-z0-9]{4,20}$/;

const fName = obj.firstName.value;
const sName = obj.surName.value;
const login = obj.nickname.value;
const telephone = obj.telephone.value;
const password = obj.pass.value;
const password2 = obj.pass2.value;

const elFname = document.querySelector('#first-name');
const elSname = document.querySelector('#sur-name');
const elLogin = document.querySelector('#nickname');
const elTelephone = document.querySelector('#telephone');
const elPassword = document.querySelector('#pass');
const elPassword2 = document.querySelector('#pass2');

const classError = 'input--error';

  if (fName == "") {
      return_value = false;
      elFname.classList.add(classError);
  }else {
      if (elFname.classList.contains(classError))
        elFname.classList.remove(classError);
  }

  if (sName == "") {
      return_value = false;
      elSname.classList.add(classError);
  }else {
      if (elSname.classList.contains(classError))
        elSname.classList.remove(classError);
  }

  if(reg_login.exec(login) == null || login =="")
  {
      return_value = false;
      elLogin.classList.add(classError);
  }else {
    if (elLogin.classList.contains(classError))
      elLogin.classList.remove(classError);
  }

  if(reg_tel.exec(telephone) == null || telephone == "")
  {
      return_value = false;
      elTelephone.classList.add(classError);
  }else {
      if (elTelephone.classList.contains(classError))
        elTelephone.classList.remove(classError);
  }
  if (reg_pass.exec(password) == null || password == "") {
      return_value = false;
      elPassword.classList.add(classError);
  }else {
      if (elPassword.classList.contains(classError))
        elPassword.classList.remove(classError);
  }
  if (password2 != password || password2 == "") {
      return_value = false;
      elPassword2.classList.add(classError);
  }else {
      if (elPassword2.classList.contains(classError))
        elPassword2.classList.remove(classError);
  }
return return_value;
}
