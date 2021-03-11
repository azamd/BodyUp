/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Entities.Diets;
import Services.ServiceDiets;
import Utils.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class DietDisplayController implements Initializable {

    @FXML
    private TextField tf_Desc;
    @FXML
    private TextField tf_Name;
    @FXML
    private TableView<Diets> tv;
    @FXML
    private TableColumn<Diets,String> tc_Name;
    @FXML
    private Button btnAdd;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDel;
    @FXML
    private Button btnShow;
    @FXML
    private Button Return;
    @FXML
    private TextField tf_search;
    @FXML
    private Button btn_Search;
    @FXML
    private ComboBox<?> comboPack;
    @FXML
    private TextField tf_Calories;
    @FXML
    private Button charts;
    @FXML
    private TableColumn<Diets, Integer> tc_DietId;
    @FXML
    private TableColumn<Diets, Integer> tc_PkgId;
    @FXML
    private TableColumn<Diets, String> tc_Desc;
    @FXML
    private TableColumn<Diets, Integer> tc_Cal;
    
    ObservableList plist=FXCollections.observableArrayList();
     public static int idPack;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         DisplayDiet();
        //searchDiet();
        
        comboPack();
        
    }    


    @FXML
    private void turnBack(ActionEvent event) {
        
    }


   

    @FXML
    private void goCharts(ActionEvent event) throws IOException {
        Parent chart_display_parent = FXMLLoader.load(getClass().getResource("/appbodyup/ChartsDisplay2.fxml"));
    Scene chart_scene = new Scene(chart_display_parent);
    Stage stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    stage.setScene(chart_scene);
    stage.show(); 
    }

    
     private void comboPack() {
     try {
            String requete = "SELECT * FROM package";
            Statement st = MyConnection.getInstance().getCnx()
                    .createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
              
                
                plist.add(rs.getString("pkg_id"));

       
             comboPack.setItems(plist);
            
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    
    
    }
    
      @FXML
    private void selectComboPack(ActionEvent event) {
        
        idPack=Integer.parseInt(comboPack.getSelectionModel().getSelectedItem().toString());
    }
    
    
    
    private void DisplayDiet() {
     ServiceDiets sd = new ServiceDiets();
    Diets D = new Diets();
    
    List<Diets> L = new ArrayList();
    
    L=sd.getDtList();
    ObservableList vlist=FXCollections.observableArrayList(L);
    
   
                 
    
  tc_Name.setCellValueFactory(new PropertyValueFactory<Diets,String>("name"));
   tc_DietId.setCellValueFactory(new PropertyValueFactory<Diets,Integer>("dt_id"));
  tc_PkgId.setCellValueFactory(new PropertyValueFactory<Diets,Integer>("pkg_id"));
    tc_Desc.setCellValueFactory(new PropertyValueFactory<Diets,String>("description"));
    tc_Cal.setCellValueFactory(new PropertyValueFactory<Diets,Integer>("calories"));
    
    
    tv.setItems(vlist);
    
    }
    
    
    
    @FXML
    private void AddDiet(ActionEvent event) {
        
        
        ServiceDiets sd = new ServiceDiets();
        Diets D = new Diets();
        
        
        int pkg_id=Integer.parseInt(comboPack.getSelectionModel().getSelectedItem().toString());
       
        
        String cl=tf_Calories.getText();
        int cll= Integer.parseInt(cl);
       
        
        
        String namee = tf_Name.getText();
        String des = tf_Desc.getText();
       
        
        
        
        D.setPkg_id(pkg_id);
        D.setName(namee);
        
        D.setDescription(des);
       
        D.setCalories(cll);
        
        
         sd.addDiets(D);
         
         DisplayDiet();
        
        
    }

    @FXML
    private void UpdateDiet(ActionEvent event) {
        
         ServiceDiets sd = new ServiceDiets();
        Diets D = new Diets();
        
        int pkg_id=Integer.parseInt(comboPack.getSelectionModel().getSelectedItem().toString());
       
        
        String cl=tf_Calories.getText();
        int cll= Integer.parseInt(cl);
       
        
        
        String namee = tf_Name.getText();
        String des = tf_Desc.getText();
       
        
        
        
        D.setPkg_id(pkg_id);
        D.setName(namee);
        
        D.setDescription(des);
       
        D.setCalories(cll);
        
        
         sd.addDiets(D);
         
         DisplayDiet();
        
        
        
        sd.updateDiets(D);
         DisplayDiet();
        
        
    }

    @FXML
    private void DeleteDiet(ActionEvent event) {
        
          ServiceDiets sd = new ServiceDiets();
        Diets D = new Diets();
        
        
        D.setName(tf_Name.getText());
       
        sd.deleteDiets(D);
         DisplayDiet();
        
        
        
    }

    @FXML
    private void ShowDiet(ActionEvent event) {
        
        ServiceDiets sd = new ServiceDiets();
        Diets D = new Diets(); 
    DisplayDiet();
        
    }

    @FXML
    private void searchDiet(ActionEvent event) {
    }
    
}
