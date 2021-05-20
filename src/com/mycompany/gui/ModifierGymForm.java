/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycomany.entities.Gym;
import com.mycompany.services.ServiceGym;

/**
 *
 * @author Lenovo
 */
public class ModifierGymForm extends BaseForm {
    
    Form current;
    public ModifierGymForm(Resources res , Gym r) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Modifier Gym");
        getContentPane().setScrollVisible(false);
        
        
        super.addSideMenu(res);
        
        TextField objet = new TextField(r.getName(), "Name" , 20 , TextField.ANY);
        TextField description = new TextField(r.getDescription(), "Description" , 20 , TextField.ANY);
        TextField Price = new TextField(String.valueOf(r.getPrice()), "Price" , 20 , TextField.ANY);
        TextField Duration = new TextField(String.valueOf(r.getDuration()), "Duration" , 20 , TextField.ANY);

        //etat bch na3mlo comobbox bon lazm admin ya3mlleha approuver mais just chnwarikom ComboBox
        
       
        
       
        
        
        
        
        objet.setUIID("NewsTopLine");
        description.setUIID("NewsTopLine");
        
        objet.setSingleLineTextArea(true);
        description.setSingleLineTextArea(true);
        
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           r.setName(objet.getText());
           r.setDescription(description.getText());
           r.setPrice(Float.parseFloat(Price.getText()));
           r.setDuration((int)Float.parseFloat(Duration.getText()));
          
       
       //appel fonction modfier reclamation men service
       
       if(ServiceGym.getInstance().modifierGym(r)) { // if true
           new ListGymForm(res).show();
       }
        });
       Button btnAnnuler = new Button("Annuler");
       btnAnnuler.addActionListener(e -> {
           new ListGymForm(res).show();
       });
       
       
       Label l2 = new Label("");
       
       Label l3 = new Label("");
       
       Label l4 = new Label("");
       
       Label l5 = new Label("");
       
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1, l2, 
                new FloatingHint(objet),
                createLineSeparator(),
                new FloatingHint(description),
                createLineSeparator(),
                createLineSeparator(),//ligne de séparation
                btnModifier,
                btnAnnuler
                
               
        );
        
        add(content);
        show();
        
        
    }
}

