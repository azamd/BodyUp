/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import Entities.Exercices;
import Services.ServiceExercices;
import Utils.MyConnection;
import static com.mysql.cj.Messages.getString;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URL;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
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
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.media.Media;
import javafx.scene.media.MediaView;
import javafx.stage.Stage;
import javax.swing.JFileChooser;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;


/**
 *
 * @author aziz
 */



public class FXMLDocumentController implements Initializable {
    private Label label;
    private TextField tf_Level;
    @FXML
    private TextField tf_Duration;
    @FXML
    private TextField tf_Label;
    @FXML
    private TextField tf_Name;
    @FXML
    private TableView<Exercices> tv;
    @FXML
    private TableColumn<Exercices, String> tc_Name;
    @FXML
    private TableColumn<Exercices, String> tc_Label;
    @FXML
    private TableColumn<Exercices, Integer> tc_Duration;
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
    private TextField tf_search;
    
     ObservableList<Exercices> dataList;
    @FXML
    private Button btn_Search;
    public static int idCat;
    public static int idPack;
    public String lvl;
    public String catt;
    public String packk;
    
    public ObservableList<Exercices> exList = FXCollections.observableArrayList();
     public ObservableList<String> anotherList = FXCollections.observableArrayList();
     
     ObservableList list=FXCollections.observableArrayList();
     ObservableList plist=FXCollections.observableArrayList();
    @FXML
    private ComboBox<?> comboCat;
    @FXML
    private ComboBox<?> comboPack;
    @FXML
    private TextField tf_img;
    @FXML
    private ImageView ImageView;
    @FXML
    private TableColumn<Exercices, ImageView> tc_img;
    @FXML
    private TableColumn<Exercices,Float > tc_price;
    @FXML
    private ComboBox<String> comboLevel;
    @FXML
    private TextField tf_Price;
    @FXML
    private TextField tf_vid;
    @FXML
    private Button charts;
    @FXML
    private Button Next;
    @FXML
    private MediaView MediaView;
    @FXML
    private Button excel;
    @FXML
    private Button Next1;
    
     
    
    
    private void handleButtonAction(ActionEvent event) {
        System.out.println("You clicked me!");
        label.setText("Hello World!");
    }
    
     
     
    @Override
    public void initialize(URL url, ResourceBundle rb) {
         
        
        DisplayExercice();
        search_Data();
        comboCat();
        comboPack();
        comboLevel();
     
    }    
       
    
    
    private void DisplayExercice() {
     ServiceExercices se = new ServiceExercices();
    Exercices E = new Exercices();
    
    List<Exercices> L = new ArrayList();
    
    L=se.getExList();
    ObservableList vlist=FXCollections.observableArrayList(L);
    
   
                 
    
  tc_Name.setCellValueFactory(new PropertyValueFactory<Exercices,String>("name"));
   tc_img.setCellValueFactory(new PropertyValueFactory<>("imageShow"));
    tc_Label.setCellValueFactory(new PropertyValueFactory<Exercices,String>("label"));
    tc_Duration.setCellValueFactory(new PropertyValueFactory<Exercices,Integer>("duration"));
    tc_Level.setCellValueFactory(new PropertyValueFactory<Exercices,String>("level"));
    tc_price.setCellValueFactory(new PropertyValueFactory<Exercices,Float>("price"));
    
    tv.setItems(vlist);
   
    }

    
    
    
    
    
    @FXML
    private void AddExercice(ActionEvent event) {
        ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices();
        
        int cat_id=Integer.parseInt(comboCat.getSelectionModel().getSelectedItem().toString());
        int pkg_id=Integer.parseInt(comboPack.getSelectionModel().getSelectedItem().toString());
        String lvl=comboLevel.getSelectionModel().getSelectedItem().toString();
        String dr=tf_Duration.getText();
        int duration= Integer.parseInt(dr);
        String pr=tf_Price.getText();
        float prix= Float.parseFloat(pr);
        
        
        String namee = tf_Name.getText();
        String lbl = tf_Label.getText();
       
        String Img = tf_img.getText();
        String Vid = tf_vid.getText();
        
        E.setCat_id(cat_id);
        E.setPkg_id(pkg_id);
        E.setName(namee);
        E.setLabel(lbl);
        E.setDuration(duration);
        E.setImage(Img);
        E.setVideo(Vid);
        E.setLevel(lvl);
        E.setPrice(prix);
        
        
        
        se.addExercices(E);
         
         DisplayExercice();
        
         
         
         
         /*if (namee.isEmpty() || lbl.isEmpty() || Dr.isEmpty() || Img.isEmpty() || Vid.isEmpty() || pr.isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setHeaderText(null);
            alert.setContentText("Please fill the missing fields");
            alert.showAndWait();
    
        
        }
  
        else{*/
        
         
         //}    
    }

    @FXML
    private void UpdateExercice(ActionEvent event) {
        ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices();
        
        int cat_id=Integer.parseInt(comboCat.getSelectionModel().getSelectedItem().toString());
        int duration=Integer.parseInt(tf_Duration.getText());
        int pkg_id=Integer.parseInt(comboPack.getSelectionModel().getSelectedItem().toString());
        String lvl=comboLevel.getSelectionModel().getSelectedItem().toString();
        float prix= Float.parseFloat(tf_Price.getText());
        
        E.setCat_id(cat_id);
        E.setPkg_id(pkg_id);
        E.setName(tf_Name.getText());
        E.setLabel(tf_Label.getText());
        E.setDuration(duration);
        E.setLevel(lvl);
         E.setPrice(prix);
        
        se.updateExercices(E);
         DisplayExercice();
    }

    @FXML
    private void DeleteExercice(ActionEvent event) {
       ServiceExercices se = new ServiceExercices();
        Exercices E = new Exercices(); 
        E.setName(tf_Name.getText());
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
        
      
        
    tc_Name.setCellValueFactory(new PropertyValueFactory<Exercices,String>("name"));
     tc_img.setCellValueFactory(new PropertyValueFactory<Exercices,ImageView>("imageShow"));
      
    tc_Label.setCellValueFactory(new PropertyValueFactory<Exercices,String>("label"));
    tc_Duration.setCellValueFactory(new PropertyValueFactory<Exercices,Integer>("duration"));
    tc_Level.setCellValueFactory(new PropertyValueFactory<Exercices,String>("level"));
    tc_price.setCellValueFactory(new PropertyValueFactory<Exercices,Float>("price"));
     ServiceExercices se = new ServiceExercices();
        
        
    List<Exercices> L = new ArrayList();
    L=se.getExList();
    ObservableList dataList=FXCollections.observableArrayList(L);
        
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
    
    
    
    
    
   
    
    private void comboCat() {
        
         try {
            String requete = "SELECT * FROM categories";
            Statement st = MyConnection.getInstance().getCnx().createStatement();
            ResultSet rs =  st.executeQuery(requete);
            while(rs.next()){
              
                
                list.add(rs.getString("cat_id"));

       
             comboCat.setItems(list);
            
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
        
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
   private void comboLevel()
   {
   
   
   ObservableList<String> lList = FXCollections.observableArrayList("Beginner","Intermediate","Professional");  
         
         comboLevel.setItems(lList);
    
   
   
   }
    
    @FXML
    private void addImageButton(ActionEvent event) {
        try {
            JFileChooser chooser = new JFileChooser();
            chooser.showOpenDialog(null);
            File f = chooser.getSelectedFile();
            String filname = f.getAbsolutePath();
            tf_img.setText(filname);
            Image getAbsolutePath=null;  
             
             Image image = new Image(new FileInputStream(filname));
             
             
             ImageView.setImage(image);
             ImageView.setPreserveRatio(true);
             
        } catch (FileNotFoundException ex) {
            Logger.getLogger(FXMLDocumentController.class.getName()).log(Level.SEVERE, null, ex);
        }
       
      
        
        
    }

    @FXML
    private void selectComboCat(ActionEvent event) {
         idCat=Integer.parseInt( comboCat.getSelectionModel().getSelectedItem().toString());
         //catt=comboCat.getSelectionModel().getSelectedItem().toString();
    }

    @FXML
    private void selectComboPack(ActionEvent event) {
        //packk=comboPack.getSelectionModel().getSelectedItem().toString();
         idPack=Integer.parseInt( comboPack.getSelectionModel().getSelectedItem().toString());
    }


    @FXML
    private void goCharts(ActionEvent event)  throws IOException {
       Parent chart_display_parent = FXMLLoader.load(getClass().getResource("/appbodyup/ChartsDisplay.fxml"));
    Scene chart_scene = new Scene(chart_display_parent);
    Stage stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    stage.setScene(chart_scene);
    stage.show(); 
        
    }


    @FXML
    private void goExcel(ActionEvent event) {
        
        try {
            String query = "SELECT * from exercices";
            PreparedStatement pst = MyConnection.getInstance().getCnx().prepareStatement(query);
            ResultSet rs = pst.executeQuery();

            XSSFWorkbook wb = new XSSFWorkbook();
            XSSFSheet sheet = wb.createSheet("Exercices Infos");
            XSSFRow header = sheet.createRow(0);
            header.createCell(0).setCellValue("ex_id");
            header.createCell(1).setCellValue("pkg_id");
            header.createCell(2).setCellValue("cat_id");
            header.createCell(3).setCellValue("name");
            header.createCell(4).setCellValue("image");
             header.createCell(5).setCellValue("video");
            header.createCell(6).setCellValue("label");
            header.createCell(7).setCellValue("duration");
            header.createCell(8).setCellValue("level");
            header.createCell(9).setCellValue("price");

            sheet.autoSizeColumn(1);
            sheet.autoSizeColumn(2);
            sheet.autoSizeColumn(3);
            sheet.autoSizeColumn(4);
            sheet.autoSizeColumn(5);
            sheet.autoSizeColumn(6);
            sheet.autoSizeColumn(7);
            sheet.autoSizeColumn(8);
            sheet.autoSizeColumn(9);
            sheet.setColumnWidth(3, 256 * 25);
            sheet.setZoom(150);
            
            int index = 0;
            while (rs.next()) {
                XSSFRow row = sheet.createRow(index);
                row.createCell(0).setCellValue(rs.getInt("ex_id"));
                row.createCell(1).setCellValue(rs.getInt("pkg_id"));
                row.createCell(2).setCellValue(rs.getInt("cat_id"));
                row.createCell(3).setCellValue(rs.getString("name"));
                row.createCell(4).setCellValue(rs.getString("image"));
                row.createCell(5).setCellValue(rs.getString("video"));
                row.createCell(6).setCellValue(rs.getString("label"));
                row.createCell(7).setCellValue(rs.getInt("duration"));
                row.createCell(8).setCellValue(rs.getString("level"));
                row.createCell(9).setCellValue(rs.getFloat("price"));
               
                
                index++;
            }

            FileOutputStream fileOut = new FileOutputStream("Exercices Infos" + index + ".xlsx");
            index++;
            wb.write(fileOut);
            fileOut.close();

            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Inforamtion dialog");
            alert.setHeaderText(null);
            alert.setContentText("Exercices Details Exported in Excel Sheet");
            alert.showAndWait();

            pst.close();
            rs.close();

        } catch (SQLException | FileNotFoundException ex) {
            Logger.getLogger(FXMLDocumentController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(FXMLDocumentController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void selectComboLevel(ActionEvent event) {
    }

    @FXML
    private void gooNext(ActionEvent event) throws IOException {
    Parent cat_section_parent = FXMLLoader.load(getClass().getResource("/appbodyup/DietDisplay.fxml"));
    Scene cat_section_scene = new Scene(cat_section_parent);
    Stage stage =(Stage) ((Node) event.getSource()).getScene().getWindow();
    
    stage.setScene(cat_section_scene);
    stage.show();
    
    
    }


    

   

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
    
    
    

