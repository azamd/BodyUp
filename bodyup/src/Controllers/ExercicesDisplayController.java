/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Controllers;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.VBox;

/**
 * FXML Controller class
 *
 * @author aziz
 */
public class ExercicesDisplayController implements Initializable {

    @FXML
    private TextField tf_search;
    @FXML
    private Button search;
    @FXML
    private VBox chosenFruitCard;
    @FXML
    private Label exName;
    @FXML
    private Label exPrice;
    @FXML
    private Button moreInfos;
    @FXML
    private ScrollPane scroll;
    @FXML
    private GridPane grid;
    @FXML
    private ImageView ImgEx;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void searchEx(ActionEvent event) {
        
        
        
    }

    @FXML
    private void goMoreInfos(ActionEvent event) {
    }
    
}
