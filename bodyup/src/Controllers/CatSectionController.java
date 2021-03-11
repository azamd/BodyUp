/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Entities.Categories;
import Services.ServiceCategories;
import Utils.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class CatSectionController implements Initializable {

    private TextField tf_CatId;
    @FXML
    private TextField tf_Name;
    private Label display;
    @FXML
    private Button CatDel;
    @FXML
    private Button CatAdd;
    @FXML
    private Button CatUpdate;
    @FXML
    private Button goBack;
    @FXML
    private Button CatShow;
    @FXML
    private TableView<Categories> tvc;
    @FXML
    private TableColumn<Categories, Integer> tc_CatId;
    @FXML
    private TableColumn<Categories, String> tc_CatName;
    @FXML
    private Button searchCat;
    @FXML
    private TextField tf_search;
    
    ObservableList<Categories> dataList;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
              DisplayCat() ;
              search_Data2();
    }    

     public ObservableList<Categories> getCatList() {
        
        ObservableList<Categories> catList = FXCollections.observableArrayList();
        String query="SELECT * FROM categories";
        Statement st;
        ResultSet rs;
        try{
       
         st= MyConnection.getInstance().getCnx().createStatement(); 
           
         rs=st.executeQuery(query);
         Categories C;
         
         while(rs.next()){
          C = new Categories(rs.getInt("cat_id"),rs.getString("cat_Name"));
          catList.add(C);
         }
        
        }
        catch(Exception e){
        
        e.printStackTrace();
        
        }
         return catList;
    
    }
    
    @FXML
     private void DisplayCat() {
     ServiceCategories se = new ServiceCategories();
    Categories C = new Categories();
    
    ObservableList<Categories> list = getCatList();
    
    tc_CatId.setCellValueFactory(new PropertyValueFactory<Categories,Integer>("cat_id"));
    tc_CatName.setCellValueFactory(new PropertyValueFactory<Categories,String>("cat_Name"));
   
    tvc.setItems(list);
   
    }
    
    
    
    
    @FXML
    private void DeleteCat(ActionEvent event) {
         ServiceCategories sc = new ServiceCategories();
        Categories C = new Categories(); 
        C.setCat_Name(tf_Name.getText());
        
        sc.deleteCategories(C);
        DisplayCat();
    }

    @FXML
    private void AddCat(ActionEvent event) {
    ServiceCategories sc = new ServiceCategories();
        Categories C = new Categories();
            
            
          
        C.setCat_Name(tf_Name.getText());
        
        sc.addCategories(C);
             DisplayCat() ;

    }

    @FXML
    private void UpdateCat(ActionEvent event) {
         ServiceCategories sc = new ServiceCategories();
        Categories C = new Categories();
        
         
         
        C.setCat_Name(tf_Name.getText());
        
        sc.updateCategories(C);
        DisplayCat();
    }

    /*private void DisplayCat(ActionEvent event) {
   ServiceCategories sc = new ServiceCategories();
        Categories C = new Categories();
        
        try {
            display.setText(sc.displayCategories().toString());
        } catch (SQLException ex) {
            Logger.getLogger(CatSectionController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }*/

    
    void search_Data2() { 
        
       tc_CatId.setCellValueFactory(new PropertyValueFactory<Categories,Integer>("cat_id"));
    tc_CatName.setCellValueFactory(new PropertyValueFactory<Categories,String>("cat_name"));
    
    
        
        
        dataList = getCatList();
        tvc.setItems(dataList);
        FilteredList<Categories> filteredData = new FilteredList<>(dataList, b -> true);  
 tf_search.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(e -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }    
    String lowerCaseFilter = newValue.toLowerCase();
    
    
     if(e.getCat_Name().toLowerCase().indexOf(lowerCaseFilter) != -1 ){ 
     return true;
    } else  
         return false; // Does not match.
   });
  });  
  SortedList<Categories> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(tvc.comparatorProperty());  
  tvc.setItems(sortedData);      
    }

    private void searchCat(ActionEvent event) {
            search_Data2(); 

    }
    
    
    
    
    
    
    
    
    @FXML
    private void getBack(ActionEvent event) throws IOException {
        Parent exercices_parent = FXMLLoader.load(getClass().getResource("/appbodyup/FXMLDocument.fxml"));
    Scene ex_section_scene = new Scene(exercices_parent);
    Stage second_stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    second_stage.setScene(ex_section_scene);
    second_stage.show();
        
    }
    
    
    
    
}
