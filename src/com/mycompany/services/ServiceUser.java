/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Dialog;
import com.codename1.ui.TextField;
import com.codename1.ui.util.Resources;
import com.mycomany.entities.User;
import com.mycomany.utils.Statics;
import com.mycompany.gui.AddGymForm;
import com.mycompany.gui.ChangepasswordForm;
import com.mycompany.gui.CodeForm;
import com.mycompany.gui.NewsfeedForm;
import com.mycompany.gui.SignInForm;
import java.io.IOException;
import java.util.Map;
import java.util.concurrent.ThreadLocalRandom;


/**
 *
 * @author Geek
 */
public class ServiceUser {
    private static ServiceUser instance =null;
        public static Integer code =null;
         public static Integer codeforget =null;
          public static String email =null;

  private ConnectionRequest req;
public static ServiceUser getInstance(){
    if(instance==null)
        instance = new ServiceUser();
    return instance;
}  
public ServiceUser(){
    req=new ConnectionRequest();
}
public void Signin(TextField username,TextField password ,Resources rs){
    String url="http://127.0.0.1:8000/userr/signin?username="+username.getText()+"&password="+password.getText();
    req.setUrl(url);
    req.addResponseListener((e)->{
        JSONParser j =new JSONParser();
        String json=new String(req.getResponseData());
        try {
        if(json.equals("failed")){
            Dialog.show("Echec D'authentification","username ou password invalid","ok",null);
        }else if(json.equals("passowrd not found")){
            Dialog.show("Echec D'authentification","password invalid","ok",null);
        
        }else{
         System.out.println("data = "+json);
            
                Map<String,Object> user=j.parseJSON(new CharArrayReader(json.toCharArray()));
                if(user.size()>0){
                    Statics.user=new User();
                    Statics.user.setFirst_name(user.get("firstName").toString());
                    Statics.user.setEmail(user.get("email").toString());
                    Statics.user.setLevel(user.get("level").toString());
                    Statics.user.setCity(user.get("city").toString());
                    Statics.user.setPhone(user.get("phone").toString());
                    Statics.user.setZip(user.get("zip").toString());
                    Statics.user.setGender(user.get("gender").toString());
                    Statics.user.setAdress(user.get("adress").toString());
                    Statics.user.setUsername(user.get("username").toString());
                    Statics.user.setPassword(password.getText());
                    Statics.user.setId(user.get("id").toString());
                    new  AddGymForm(rs).show();
                }else{
                    
                }
                        
                       
            
        }
         } catch (IOException ex) {
                ex.printStackTrace();
            }

});
    
NetworkManager.getInstance().addToQueueAndWait(req);
}
public void Signup(TextField fn,TextField email, TextField username,TextField password ,Resources rs){
          code = ThreadLocalRandom.current().nextInt();

    String url="http://127.0.0.1:8000/userr/signup?fn="+fn.getText()+"&email="+email.getText()+"&username="+username.getText()+"&password="+password.getText()+"&code="+code;
    req.setUrl(url);
    req.addResponseListener((e)->{
        JSONParser j =new JSONParser();
        String json=new String(req.getResponseData());
        if(json.equals("email invalid.")){
            Dialog.show("Echec D'inscription","email déja existe","ok",null);
        }else{
            System.out.println("data = "+json);
            Dialog.show("Success","Compte à été créer avec success","ok",null);
            
            new  CodeForm(rs).show();
            
            
            
            
        }

});
    
NetworkManager.getInstance().addToQueueAndWait(req);
}
public void Edit(TextField fn,TextField email,TextField level,TextField city,TextField phone,TextField zip,
        TextField gender,TextField adress,TextField username,TextField password,Resources rs){
    String url="http://127.0.0.1:8000/userr/ediUser?fn="+fn.getText()+"&email="+email.getText()+
            "&level="+level.getText()+"&city="+city.getText()+
            "&phone="+phone.getText()+"&zip="+zip.getText()+
            "&gender="+gender.getText()+"&adress="+adress.getText()+
            "&id="+Statics.user.getId()+
            "&username="+username.getText()+"&password="+password.getText();
    System.out.println(url);
    req.setUrl(url);
    req.addResponseListener((e)->{
        JSONParser j =new JSONParser();
        String json=new String(req.getResponseData());
         if(json.equals("success")){
             System.out.println("data = "+json);
           
            
            
        }else{
           
           
            
            
            
        }
           
       
    });
  NetworkManager.getInstance().addToQueueAndWait(req);
  
}
public void Check(TextField username,Resources rs){
    if(username.getText().equals(String.valueOf(code))){
        new  SignInForm(rs).show();
    }else{
                    Dialog.show("Error","Verifer votre code","ok",null);

    }
    
}

    public void Forget(TextField email, Resources res) {
            codeforget = ThreadLocalRandom.current().nextInt();
this.email=email.getText();
        String url="http://127.0.0.1:8000/userr/forget?email="+email.getText()+"&code="+codeforget;
    System.out.println(url);
    req.setUrl(url);
    req.addResponseListener((e)->{
        JSONParser j =new JSONParser();
        String json=new String(req.getResponseData());
        System.out.println("data = "+json);
         
             
           
            new  ChangepasswordForm(res).show();
            
       
           
       
    });
  NetworkManager.getInstance().addToQueueAndWait(req);
    }

    public void Chnage(TextField password,TextField code, Resources res) {
        if(codeforget==Integer.parseInt(code.getText())){
      String url="http://127.0.0.1:8000/userr/changepassword?email="+email+"&password="+password.getText();
    System.out.println(url);
    req.setUrl(url);
    req.addResponseListener((e)->{
        JSONParser j =new JSONParser();
        String json=new String(req.getResponseData());
         if(json.equals("success")){
             //System.out.println("data = "+json);
           
            new  SignInForm(res).show();
            
        }else{
           
           
            
            
            
        }
           
       
    });
    
  NetworkManager.getInstance().addToQueueAndWait(req);
        }else{
                              Dialog.show("Error","Verifer votre code","ok",null);
  
        }
    }
}

