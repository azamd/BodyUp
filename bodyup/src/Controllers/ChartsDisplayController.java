/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;


import Entities.Exercices;
import Services.ServiceExercices;
import Utils.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.DriverManager;
import java.util.ArrayList;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.scene.Scene;
import javafx.scene.chart.*;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.geometry.Side;
import javafx.scene.chart.PieChart.Data;
import javafx.scene.control.Button;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author aziz
 */
public class ChartsDisplayController implements Initializable {

    @FXML
    private PieChart pieChart;
    
    public String cat;
    @FXML
    private Button ReturnBtn;
    

    /**
     * Initializes the controller class.
     */
    
  
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        ObservableList<PieChart.Data> data = FXCollections.observableArrayList();
        
         try {
            String requete = "SELECT * FROM exercices";
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
              
                
               data.add(new PieChart.Data(rs.getString("name"),rs.getInt("duration")));
            
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        pieChart.setTitle("Exercices/Duration");
        pieChart.setLegendSide(Side.LEFT);
        pieChart.setData(data);
        
        
        
        
        
        
        
        
        
    }    
  
  

    @FXML
    private void turnBack(ActionEvent event) throws IOException {
    
     Parent exercices_parent = FXMLLoader.load(getClass().getResource("/appbodyup/FXMLDocument.fxml"));
    Scene ex_section_scene = new Scene(exercices_parent);
    Stage second_stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    second_stage.setScene(ex_section_scene);
    second_stage.show();
        
    }
    
    
    
    
    
    
    
    }
    
    
    
    
    
    
    
    
    
    
    
  
    
    
    
    
    
    
    

