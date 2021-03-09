/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package tableView;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextField;
import helpers.DbConnect;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Alert;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import models.Events;

/**
 * FXML Controller class
 *
 * @author hocin
 */
public class AddEventController implements Initializable {

    @FXML
    private JFXTextField titleField;
    @FXML
    private JFXTextField catField;
    @FXML
    private JFXTextField descriptionField;
    @FXML
    private JFXTextField locField;
    @FXML
    private JFXDatePicker stdField;
    @FXML
    private JFXDatePicker endField;

    String query = null;
    Connection connection = null;
    ResultSet resultSet = null;
    PreparedStatement preparedStatement;
    Events Event = null;
    private boolean update;
    int eventId;
    @FXML
    private JFXButton btnSave;
    @FXML
    private JFXButton btnClear;



    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void save(MouseEvent event) {

        connection = DbConnect.getConnect();
        String title = titleField.getText();
        String category = catField.getText();
        String description = descriptionField.getText();
        String location = locField.getText();
        String StartDate = String.valueOf(stdField.getValue());
        String EndDate = String.valueOf(endField.getValue());

        if (title.isEmpty() || category.isEmpty() || description.isEmpty() || location.isEmpty() ) {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setHeaderText(null);
            alert.setContentText("Please fill the missing fields");
            alert.showAndWait();

        } else {
            getQuery();
            insert();
                            Stage stage = (Stage)((Node) event.getSource()).getScene().getWindow();
        stage.close();
            

        }

    }

    private void clean() {
       titleField.setText(null);
       catField.setText(null);
       descriptionField.setText(null);
       locField.setText(null);
       stdField.setValue(null);
       endField.setValue(null);
        
    }

    private void getQuery() {

        if (update == false) {
            
            query = "INSERT INTO `events`(`EvCategory`, `EvTitle`, `EvDescription`, `EvLocation`, `EvStartDate`, `EvEndDate`) VALUES (?,?,?,?,?,?)";

        }else{
            query = "UPDATE `events` SET "
                    + "`EvCategory`=?,"
                    + "`EvTitle`=?,"
                     + "`EvDescription`=?,"
                    + "`EvLocation`=?,"
                    + "`EvStartDate`=?,"
                    + "`EvEndDate`= ? WHERE EvID = '"+eventId+"'";
        }

    }

    private void insert() {

        try {

            preparedStatement = connection.prepareStatement(query);
            preparedStatement.setString(1, titleField.getText());
            preparedStatement.setString(2, catField.getText());
            preparedStatement.setString(3, descriptionField.getText());
            preparedStatement.setString(4, locField.getText());
            preparedStatement.setString(5, String.valueOf(stdField.getValue()));
            preparedStatement.setString(6, String.valueOf(endField.getValue()));
            preparedStatement.execute();


        } catch (SQLException ex) {
            Logger.getLogger(AddEventController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }



    void setUpdate(boolean b) {
        this.update = b;

    }

    void setTextField(int id, String title, String category, String description, String location, LocalDate toLocalDate, LocalDate toLocalDate0) {
        eventId = id;
        titleField.setText(title);
        catField.setText(category);
        descriptionField.setText(description);
        locField.setText(location);
        stdField.setValue(toLocalDate);
endField.setValue(toLocalDate0);
    }

    @FXML
    private void clear() {
      titleField.setText(null);
       catField.setText(null);
       descriptionField.setText(null);
       locField.setText(null);
       stdField.setValue(null);
       endField.setValue(null);
    }

}
