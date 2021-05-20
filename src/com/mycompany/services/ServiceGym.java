/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycomany.entities.Gym;
import com.mycomany.utils.Statics;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;

/**
 *
 * @author ASUS
 */
public class ServiceGym {
 
      
    //singleton 
    public static ServiceGym instance = null ;
    
    public static boolean resultOk = true;

    //initilisation connection request 
    private ConnectionRequest req;
    
    
    public static ServiceGym getInstance() {
        if(instance == null )
            instance = new ServiceGym();
        return instance ;
    }
    
    
    
    public ServiceGym() {
        req = new ConnectionRequest();
        
    }
    
    
    //ajout 
    public void addGym(Gym gym) {
        
        String url =Statics.BASE_URL+"/addGym?name="+gym.getName()+"&Duration="+gym.getDuration()
                +"&Price="+gym.getPrice()+"&Description="+gym.getDescription(); // aa sorry n3adi getId lyheya mech ta3 user ta3 reclamation
        
        req.setUrl(url);
        req.addResponseListener((e) -> {
            
            String str = new String(req.getResponseData());//Reponse json hethi lyrinaha fi navigateur 9bila
            System.out.println("data == "+str);
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
        
    }
    
    
  
    public ArrayList<Gym>displayGym() {
        ArrayList<Gym> result = new ArrayList<>();
        
        String url = Statics.BASE_URL+"/displayGym";
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp ;
                jsonp = new JSONParser();
                
                try {
                    Map<String,Object>mapReclamations = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));
                    
                    List<Map<String,Object>> listOfMaps =  (List<Map<String,Object>>) mapReclamations.get("root");
                    
                    for(Map<String, Object> obj : listOfMaps) {
                        Gym re = new Gym();
                        
                        //dima id fi codename one float 5outhouha
                        float id = Float.parseFloat(obj.get("id").toString());
                        
                        String objet = obj.get("name").toString();
                        
                        float Duration = Float.parseFloat(obj.get("Duration").toString());
                        double price = Float.parseFloat(obj.get("Price").toString());
                        String description = obj.get("Description").toString();

                        re.setId((int)id);
                        re.setName(objet);
                        re.setDescription(description);
                        re.setPrice(price);
                        re.setDuration((int)Duration);
                        
                        
                        //insert data into ArrayList result
                        result.add(re);
                       
                    
                    }
                    
                }catch(Exception ex) {
                    
                    ex.printStackTrace();
                }
            
            }
        });
        
      NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

        return result;
        
        
    } 
        //Delete 
    public boolean deleteGym(int id ) {
        String url = Statics.BASE_URL +"/deleteGym?id="+id;
        
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                    
                    req.removeResponseCodeListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return  resultOk;
    }

    public boolean modifierGym(Gym r) {
String url = Statics.BASE_URL +"/updateGym?id="+r.getId()+"&name="+r.getName()+"&Description="+r.getDescription()+"&Price="
        
        +r.getPrice()+"&Duration="+r.getDuration();
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200 ;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });
        
    NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
    return resultOk;    }
    
    
    
    
    
}
