/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appbodyup;

import Entities.Exercices;
import Service.ServiceExercices;
import Tools.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ResourceBundle;
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
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;

/**
 *
 * @author aziz
 */
public class FXMLDocumentController implements Initializable {
    
    private Label label;
    @FXML
    private TextField tf_ExId;
    @FXML
    private TextField tf_Level;
    @FXML
    private TextField tf_Duration;
    @FXML
    private TextField tf_CatId;
    @FXML
    private TextField tf_Label;
    @FXML
    private TextField tf_PkgId;
    @FXML
    private TextField tf_Name;
    @FXML
    private TableView<Exercices> tv;
    @FXML
    private TableColumn<Exercices, String> tc_ExId;
    @FXML
    private TableColumn<Exercices, String> tc_PkgId;
    @FXML
    private TableColumn<Exercices, String> tc_CatId;
    @FXML
    private TableColumn<Exercices, String> tc_Name;
    @FXML
    private TableColumn<Exercices, String> tc_Label;
    @FXML
    private TableColumn<Exercices, String> tc_Duration;
    @FXML
    private TableColumn<Exercices, String> tc_Level;
    @FXML
    private Button btnAdd;
    @FXML
    private Button btnUpdate;
    @FXML
    private Button btnDel;
    @FXML
    private Button btnShow;
    @FXML
    private Button Next;
    @FXML
    private TextField tf_search;
    
     ObservableList<Exercices> dataList;
    @FXML
    private Button btn_Search;
    @FXML
    private ChoiceBox<String> sortBox;
    
    public ObservableList<Exercices> exList = FXCollections.observableArrayList();
     public ObservableList<String> anotherList = FXCollections.observableArrayList();
     
    private void handleButtonAction(ActionEvent event) {
        System.out.println("You clicked me!");
        label.setText("Hello World!");
    }
    
     
     
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         DisplayExercice();
        search_Data();
        sortBox();
    }    
    
    public ObservableList<Exercices> getExList() {
        
        ObservableList<Exercices> exList = FXCollections.observableArrayList();
        String query="SELECT * FROM exercices";
        Statement st;
        ResultSet rs;
        try{
       
         st= MyConnection.getInstance().getCnx().createStatement(); 
           
         rs=st.executeQuery(query);
         Exercices E;
         
         while(rs.next()){
          E = new Exercices(rs.getString("ex_id"),rs.getString("pkg_id"),rs.getString("cat_id"),rs.getString("name"),rs.getString("label"),rs.getString("duration"),rs.getString("level"));
          exList.add(E);
         }
        
        }
        catch(Exception e){
        
        e.printStackTrace();
        
        }
         return exList;
    
    }
    
     
    
    
    
    
    private void DisplayExercice() {
     ServiceExercices se = new ServiceExercices();
    Exercices E = new Exercices();
    
    ObservableList<Exercices> list = getExList();
    
    tc_ExId.setCellValueFactory(new PropertyValueFactory<Exercices,String>("ex_id"));
    tc_PkgId.setCellValueFactory(new PropertyValueFactory<Exercices,String>("pkg_id"));
    tc_CatId.setCellValueFactory(new PropertyValueFactory<Exercices,String>("cat_id"));
    tc_Name.setCellValueFactory(new PropertyValueFactory<Exercices,String>("name"));
    tc_Label.setCellValueFactory(new PropertyValueFactory<Exercices,String>("label"));
    tc_Duration.setCellValueFactory(new PropertyValueFactory<Exercices,String>("duration"));
    tc_Level.setCellValueFactory(new PropertyValueFactory<Exercices,String>("level"));
    
    tv.setItems(list);
   
    }

    
    
    
    
    
    @FXML
    private void AddExercice(ActionEvent event) {
        ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices();
        
        E.setEx_id(tf_ExId.getText());
        E.setPkg_id(tf_PkgId.getText());
        E.setCat_id(tf_CatId.getText());
        E.setName(tf_Name.getText());
        E.setLabel(tf_Label.getText());
        E.setDuration(tf_Duration.getText());
        E.setLevel(tf_Level.getText());
        
        se.addExercices(E);
        DisplayExercice();
        
    }

    @FXML
    private void UpdateExercice(ActionEvent event) {
        ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices();
        E.setEx_id(tf_ExId.getText());
        E.setPkg_id(tf_PkgId.getText());
        E.setCat_id(tf_CatId.getText());
        E.setName(tf_Name.getText());
        E.setLabel(tf_Label.getText());
        E.setDuration(tf_Duration.getText());
        E.setLevel(tf_Level.getText());
        
        se.updateExercices(E);
         DisplayExercice();
    }

    @FXML
    private void DeleteExercice(ActionEvent event) {
       ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices(); 
        E.setEx_id(tf_ExId.getText());
        //E.setPkg_id(tf_PkgId.getText());
        //E.setCat_id(tf_CatId.getText());
        //E.setName(tf_Name.getText());
        //E.setLabel(tf_Label.getText());
        //E.setDuration(tf_Duration.getText());
        //E.setLevel(tf_Level.getText());
        se.deleteExercices(E);
         DisplayExercice();
    }

    @FXML
    private void ShowExercice(ActionEvent event) {
    ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices(); 
    DisplayExercice();
    }

    @FXML
    private void goNext(ActionEvent event) throws IOException {
    Parent cat_section_parent = FXMLLoader.load(getClass().getResource("CatSection.fxml"));
    Scene cat_section_scene = new Scene(cat_section_parent);
    Stage stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    stage.setScene(cat_section_scene);
    stage.show();
    
    
    
    }

    void search_Data() { 
        
       tc_ExId.setCellValueFactory(new PropertyValueFactory<Exercices,String>("ex_id"));
    tc_PkgId.setCellValueFactory(new PropertyValueFactory<Exercices,String>("pkg_id"));
    tc_CatId.setCellValueFactory(new PropertyValueFactory<Exercices,String>("cat_id"));
    tc_Name.setCellValueFactory(new PropertyValueFactory<Exercices,String>("name"));
    tc_Label.setCellValueFactory(new PropertyValueFactory<Exercices,String>("label"));
    tc_Duration.setCellValueFactory(new PropertyValueFactory<Exercices,String>("duration"));
    tc_Level.setCellValueFactory(new PropertyValueFactory<Exercices,String>("level"));
    
        
        
        dataList = getExList();
        tv.setItems(dataList);
        FilteredList<Exercices> filteredData = new FilteredList<>(dataList, b -> true);  
 tf_search.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(e -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }    
    String lowerCaseFilter = newValue.toLowerCase();
    
    if (e.getName().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
     return true; // Filter matches username
   } else if (e.getLabel().toLowerCase().indexOf(lowerCaseFilter) != -1) {
    return true; // Filter matches password
    }else if (e.getLevel().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    } else  
         return false; // Does not match.
   });
  });  
  SortedList<Exercices> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(tv.comparatorProperty());  
  tv.setItems(sortedData);      
    }

    @FXML
    private void searchExercice(ActionEvent event) {
            search_Data(); 

    }
    
    
    
    
    
    
    private void sortBox(){
    anotherList.removeAll(anotherList);
    String A= "SORT BY NAME";
    String B= "SORT BY LEVEL";
    String C= "SORT BY DURATION";
    
    anotherList.addAll(A,B,C);
    sortBox.getItems().addAll(anotherList);
    
    String option = sortBox.getValue();
   /* if(option.equals(A))
        
        {
        
    }
    else if(option.equals(B))
            {
   
            }
    else if(option.equals(C)) {
   
    
       
    }*/
    
    
    
    
    
    }
    
}
    
    
    

