/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Controllers.FXMLDocumentController;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class UserInterfaceController implements Initializable {

    @FXML
    private Button userBtn;
    @FXML
    private Button adminBtn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void userBtn(ActionEvent event) {
        
        FXMLLoader loader = new  FXMLLoader(getClass().getResource("/appbodyup/ExercicesDisplay.fxml"));
        try {
            
          
            Parent root = loader.load();
            
            Scene scene = new Scene(root);
         
             Stage primaryStage=new Stage();
        
        primaryStage.setScene(scene);
        primaryStage.show();
            
         
        } catch (IOException ex) {
            Logger.getLogger(FXMLDocumentController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
        
        
       @FXML
    private void adminBtn(ActionEvent event) {
    
    FXMLLoader loader = new  FXMLLoader(getClass().getResource("/appbodyup/FXMLDocument.fxml"));
        try {
            
          
            Parent root = loader.load();
            
            Scene scene = new Scene(root);
         
             Stage primaryStage=new Stage();
        
        primaryStage.setScene(scene);
        primaryStage.show();
            
         
        } catch (IOException ex) {
            Logger.getLogger(FXMLDocumentController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    
    
    
    
    
      
    }

   
   
    
    
    
    
    
    

