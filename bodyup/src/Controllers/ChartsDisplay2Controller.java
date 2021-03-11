/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Utils.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Side;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class ChartsDisplay2Controller implements Initializable {

    @FXML
    private PieChart pieChart;
    @FXML
    private Button ReturnBtn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         ObservableList<PieChart.Data> data = FXCollections.observableArrayList();
        
         try {
            String requete = "SELECT * FROM diet";
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
              
                
               data.add(new PieChart.Data(rs.getString("name"),rs.getInt("calories")));
            
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
        pieChart.setTitle("Diets/Calories");
        pieChart.setLegendSide(Side.LEFT);
        pieChart.setData(data);
        
        
    }    

    @FXML
    private void turnBack(ActionEvent event) throws IOException {
    
    Parent exercices_parent = FXMLLoader.load(getClass().getResource("/appbodyup/DietDisplay.fxml"));
    Scene ex_section_scene = new Scene(exercices_parent);
    Stage second_stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    second_stage.setScene(ex_section_scene);
    second_stage.show();
    
    
    }
    
}
