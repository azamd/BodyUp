/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appbodyup;

import Entities.User;

import Entities.Admin;
import Service.ServiceUser;
import Utils.MyConnection;
import static java.awt.PageAttributes.MediaType.E;
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
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;

/**
 * FXML Controller class
 *
 * @author Geek
 */
public class FXMLDocumentsController implements Initializable {

    /**
     * the controller class.
     */
    private Label label;
    @FXML
    private TextField tus_Id;
    @FXML
    private TextField tus_Level;
    @FXML
    private TextField tus_City;
    @FXML
    private TextField tus_Phone;
    @FXML
    private TextField tus_Name;
    @FXML
    private TextField tus_Adress;
    @FXML
    private TextField tus_Username;
    @FXML
    private TextField tus_Email;
    @FXML
    private TableView<User> tvw;
    @FXML
    private TableColumn<User, String> tu_Id;
    @FXML
    private TableColumn<User, String> tu_City;
    @FXML
    private TableColumn<User, String> tu_Phone;
    @FXML
    private TableColumn<User, String> tu_Name;
    @FXML
    private TableColumn<User, String> tu_Adress;
    @FXML
    private TableColumn<User, String> tu_Username;
    @FXML
    private TableColumn<User, String> tc_Email;
    @FXML
    private Button bttnAdd;
    @FXML
    private Button bttnUpdate;
    @FXML
    private Button bttnDel;
    @FXML
    private Button bttnShow;
    @FXML
    private TextField tf_search;
    
     ObservableList<User> dataList;
    @FXML
    private Button bttn_Search;
    @FXML
    private ChoiceBox<String> sortBox;
    
    public ObservableList<User> exList = FXCollections.observableArrayList();
     public ObservableList<String> anotherList = FXCollections.observableArrayList();
     
    private void handleButtonAction(ActionEvent event) {
        System.out.println("You clicked me!");
        label.setText("Hello World!");
    }
    



    @Override
    public void initialize(URL url, ResourceBundle rb) {
    DisplayUser();
        search_Data();
    }    
    public ObservableList<User> getUsList() {
        
        ObservableList<User> UsList = FXCollections.observableArrayList();
        String query="SELECT * FROM user";
        Statement st;
        ResultSet rs;
        try{
       
         st= MyConnection.getInstance().getCnx().createStatement(); 
           
         rs=st.executeQuery(query);
         User U;
         
         while(rs.next()){
          U = new User(rs.getString("Firstname"),rs.getString("Username"),rs.getString("email"),rs.getString("adress"),rs.getString("Phone"),rs.getString("City"));
          UsList.add(U);
         }
        
        }
        catch(Exception e){
        
        e.printStackTrace();
        
        }
         return UsList;
    
    }
    
    private void DisplayUser() {
     ServiceUser se = new ServiceUser();
    User U = new User();
    
    ObservableList<User> list = getUsList();
    
    tu_Id.setCellValueFactory(new PropertyValueFactory<User,String>("id"));
    tu_Name.setCellValueFactory(new PropertyValueFactory<User,String>("Firstname"));
    tu_Username.setCellValueFactory(new PropertyValueFactory<User,String>("Lastname"));
    //tu_Email.setCellValueFactory(new PropertyValueFactory<User,String>("email"));
    tu_Adress.setCellValueFactory(new PropertyValueFactory<User,String>("adress"));
    tu_Phone.setCellValueFactory(new PropertyValueFactory<User,String>("Phone"));
    tu_City.setCellValueFactory(new PropertyValueFactory<User,String>("city"));
    
    tvw.setItems(list);
   
    }
    
    
    @FXML
    private void AddUser(ActionEvent event) {
        ServiceUser se = new ServiceUser();
        User U = new User();
        
       U.setid(tus_Id.getAnchor());
        U.setFirstname(tus_Name.getText());
        U.setSurname(tus_Username.getText());
        U.setemail(tus_Email.getText());
        U.setadress(tus_Adress.getText());
        U.setPhone(tus_Phone.getLength());
        U.setCity(tus_City.getText());
        
        //se.AddUser(U);
        DisplayUser();
    }

    @FXML
    private void UpdateUser(ActionEvent event) {
        ServiceUser su = new ServiceUser();
        User U = new User();
        U.setid(tus_Id.getAnchor());
        U.setFirstname(tus_Name.getText());
        U.setSurname(tus_Username.getText());
        U.setemail(tus_Email.getText());
        U.setadress(tus_Adress.getText());
        U.setPhone(tus_Phone.getAnchor());
        U.setCity(tus_City.getText());
        //su.updateUser(E);
         DisplayUser();
    }

    @FXML
    private void DeleteUser(ActionEvent event) {
       ServiceUser su = new ServiceUser();
        User U = new User(); 
        // U.setid(tus_Id.getText());
        U.setFirstname(tus_Name.getText());
        U.setSurname(tus_Username.getText());
        U.setemail(tus_Email.getText());
        U.setadress(tus_Adress.getText());
        //U.setPhone(tus_Phone.getText());
        U.setCity(tus_City.getText());
        //su.DeleteUser(U);
         DisplayUser();
    }

    @FXML
    private void ShowUser(ActionEvent event) {
    ServiceUser se = new ServiceUser();
        User E = new User(); 
    DisplayUser();
    }
    void search_Data() { 
        
       tu_Id.setCellValueFactory(new PropertyValueFactory<User,String>("id"));
    tu_Name.setCellValueFactory(new PropertyValueFactory<User,String>("Firstname"));
    tu_Username.setCellValueFactory(new PropertyValueFactory<User,String>("Lastname"));
    //tu_Email.setCellValueFactory(new PropertyValueFactory<User,String>("email"));
    tu_Adress.setCellValueFactory(new PropertyValueFactory<User,String>("adress"));
    tu_Phone.setCellValueFactory(new PropertyValueFactory<User,String>("Phone"));
    tu_City.setCellValueFactory(new PropertyValueFactory<User,String>("city"));
    
    
   
        
        
        dataList = getUsList();
        tvw.setItems(dataList);
        FilteredList<User> filteredData = new FilteredList<>(dataList, b -> true);  
 tf_search.textProperty().addListener((observable, oldValue, newValue) -> {
 filteredData.setPredicate(e -> {
    if (newValue == null || newValue.isEmpty()) {
     return true;
    }    
    String lowerCaseFilter = newValue.toLowerCase();
    
    if (e.getFirstname().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
     return true; // Filter matches username
   } else if (e.getemail().toLowerCase().indexOf(lowerCaseFilter) != -1) {
    return true; // Filter matches password
    }else if (e.getCity().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    } else  
         return false; // Does not match.
   });
  });  
  SortedList<User> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(tvw.comparatorProperty());  
  tvw.setItems(sortedData);      
    }

    @FXML
    private void searchUser(ActionEvent event) {
            search_Data(); 

    }


    
    
    
    
    
    
    
    
    
    
    
    
}
