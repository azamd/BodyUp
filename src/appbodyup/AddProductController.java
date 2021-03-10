/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package appbodyup;

import Entities.Product;
import Service.ProductService;
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
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.InputMethodEvent;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Shayma CHAIBI
 */
public class AddProductController implements Initializable {

    @FXML
    private TextField ProdPrice;
    @FXML
    private TextField DescriptionProd;
    @FXML
    private TextField ProdName;
    @FXML
    private TableView<Product> TableProd;
    @FXML
    private TableColumn<Product, String> ShowName;
    @FXML
    private TableColumn<Product, String> ShowDescription;
    @FXML
    private TableColumn<Product, Float> ShowPrice;
    @FXML
    private TableColumn<Product, String> ShowCat;
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
    ObservableList<Product> dataList;
    @FXML
    private Button btn_Search;
    @FXML
    private ChoiceBox<String> sortBox;
    @FXML
    private ChoiceBox<String> ProdCat;
    
    
    public ObservableList<Product> ProdList = FXCollections.observableArrayList();
    public ObservableList<String> anotherList = FXCollections.observableArrayList();
    /**
     * Initializes the controller class.
     */
    @Override
    
    
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        DisplayProduct();
        search_Data();
        sortBox();
    }    
    
    
    public ObservableList<Product> getProdList() {
        
        ObservableList<Product> ProdList = FXCollections.observableArrayList();
        String query="SELECT * FROM Product";
        Statement st;
        ResultSet rs;
        try{
       
         st= MyConnection.getInstance().getCnx().createStatement(); 
           
         rs=st.executeQuery(query);
         Product P;
         
         while(rs.next()){
          P = new Product(rs.getString("ProdName"),rs.getString("DescriptionProd"),rs.getString("ProdPrice"),rs.getString("ProdCat"));
          ProdList.add(P);
         }
        
        }
        catch(Exception e){
        
        e.printStackTrace();
        
        }
         return ProdList;
    
    }

    @FXML
    private void AddProduct(ActionEvent event) {
        ProductService se = new ProductService();
        Product P = new Product();
        
        P.setName(ShowName.getText());
        P.setDescription(ShowDescription.getText());
        P.setPrice(ShowPrice.getCellData(P));
        P.setName(ShowCat.getText());
       
        
        se.AddProduct(P);
        DisplayProduct();
        
    }

    @FXML
    private void UpdateProduct(ActionEvent event) {
        
        ProductService se = new ProductService();
        Product P = new Product();
        P.setName(ShowName.getText());
        P.setDescription(ShowDescription.getText());
        P.setPrice(ShowPrice.getCellData(P));
        P.setName(ShowCat.getText());
        
        se.UpdateProduct(P);
         DisplayProduct();
    }

    @FXML
    private void DeleteProduct(ActionEvent event) {
        
        ProductService se = new ProductService();
        Product P = new Product(); 
        P.setName(ShowName.getText());
        //E.setPkg_id(tf_PkgId.getText());
        //E.setCat_id(tf_CatId.getText());
        //E.setName(tf_Name.getText());
        //E.setLabel(tf_Label.getText());
        //E.setDuration(tf_Duration.getText());
        //E.setLevel(tf_Level.getText());
        se.DeleteProduct(P);
         DisplayProduct();
    }

    @FXML
    private void ShowProduct(ActionEvent event) {
        
        ProductService se = new ProductService();
        Product P = new Product(); 
        DisplayProduct();
    }

    @FXML
    private void goNext(ActionEvent event) throws IOException{
        
        Parent cat_section_parent = FXMLLoader.load(getClass().getResource("Command.fxml"));
        Scene cat_section_scene = new Scene(cat_section_parent);
        Stage stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    stage.setScene(cat_section_scene);
    stage.show();
    }

    @FXML
    private void searchProduct(ActionEvent event) {
        
         ProductService se = new ProductService();
         Product P = new Product();
         DisplayProduct();
    }

    @FXML
    private void VerifCategorieHandler(InputMethodEvent event) {
    }
    
    private void DisplayProduct() {
     ServiceExercices se = new ServiceExercices();
    Product P = new Product();
    
    ObservableList<Product> list = getProdList();
    
    ShowName.setCellValueFactory(new PropertyValueFactory<Product,String>("Name"));
    ShowDescription.setCellValueFactory(new PropertyValueFactory<Product,String>("DescriptionProd"));
    ShowPrice.setCellValueFactory(new PropertyValueFactory<Product,Float>("ProdPrice"));
    ShowCat.setCellValueFactory(new PropertyValueFactory<Product,String>("ProdCat"));
    
    
    TableProd.setItems(list);
   
    }
    
    
    void search_Data() { 
        
    ShowName.setCellValueFactory(new PropertyValueFactory<Product,String>("Name"));
    ShowDescription.setCellValueFactory(new PropertyValueFactory<Product,String>("DescriptionProd"));
    ShowPrice.setCellValueFactory(new PropertyValueFactory<Product,Float>("ProdPrice"));
    ShowCat.setCellValueFactory(new PropertyValueFactory<Product,String>("ProdCat"));
    
    
        
        
        dataList = getProdList();
        TableProd.setItems(dataList);
        FilteredList<Product> filteredData = new FilteredList<>(dataList, b -> true);  
        tf_search.textProperty().addListener((observable, oldValue, newValue) -> {
        filteredData.setPredicate(e -> {
            if (newValue == null || newValue.isEmpty()) {
             return true;
            }    
        String lowerCaseFilter = newValue.toLowerCase();
    
    if (e.getName().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
     return true; // Filter matches username
   } else if (e.getCatProd().toLowerCase().indexOf(lowerCaseFilter) != -1) {
    return true; // Filter matches password
    }else if (e.getCatProd().toLowerCase().indexOf(lowerCaseFilter) != -1) {
     return true; // Filter matches password
    } else  
         return false; // Does not match.
   });
  });  
  SortedList<Product> sortedData = new SortedList<>(filteredData);  
  sortedData.comparatorProperty().bind(TableProd.comparatorProperty());  
  TableProd.setItems(sortedData);      
    }
    
    
    
    private void sortBox(){
    anotherList.removeAll(anotherList);
    String A= "SORT BY NAME";
    String B= "SORT BY PRICE";
    String C= "SORT BY CATPROD";
    
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
