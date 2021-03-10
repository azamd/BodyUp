/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Service;

import Entities.Command;
import Tools.MyConnection;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

/**
 *
 * @author Shayma CHAIBI
 */
public class CommandService {
    private Connection cnx;
    
    public CommandService() {
        cnx = MyConnection.getInstance().getCnx();
    }
    
    public void AddCommand(Command c) {
        try {
            String request="INSERT INTO cmd(IdCmd,IdProd,client_id,DesCmd,CmdDate,DlvrDate,CmdTotal,CmdStatus,DlvrStatus) VALUES(?,?,?,?,?,?,?,?,?)";
            PreparedStatement pre=cnx.prepareStatement(request);
            
            pre.setLong(1, c.getIdCmd());
            pre.setLong(2, c.getIdProd());
            pre.setLong(3, c.getClient_id());
            pre.setString(4, c.getDesCmd());            
            pre.setDate(5, c.getCmdDate());
            pre.setDate(6, c.getDlvrDate());
            pre.setLong(7, (long) c.getCmdTotal());
            pre.setString(8, c.getCmdStatus());
            pre.setString(9, c.getDlvrStatus());
  
            pre.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
    
    
    public ArrayList<Command> GetCommand(){
        ArrayList<Command> commandes = new ArrayList<>();
        try {
            String request="SELECT c.IdCmd, c.IdProd, c.client_id, c.DesCmd, c.CmdDate, c.DlvrDate, c.CmdTotal, c.CmdStatus, c.DlvrStatus, p.Name FROM cmd a INNER JOIN product p WHERE c.IdCmd = p.IdProd";
            Statement ste=cnx.createStatement();
            ResultSet result = ste.executeQuery(request);
            while (result.next()) {
                Command c = new Command();
                c.setIdCmd((int) result.getLong("c.IdCmd"));
                c.setIdProd((int) result.getLong("c.IdProd"));
                c.setClient_id((int) result.getLong("c.client_id"));
                c.setDesCmd(result.getString("c.DesCmd"));
                c.setCmdDate(result.getDate("c.CmdDate"));
                c.setDlvrDate(result.getDate("c.DlvrDate"));
                c.setCmdTotal(result.getLong("c.CmdTotal"));
                c.setCmdStatus(result.getString("c.CmdStatus"));
                c.setDlvrStatus(result.getString("c.DlvrStatus"));
                c.setName(result.getString("p.Name"));
                commandes.add(c);
            }
        } catch(SQLException ex) {
            System.out.println(ex);
        }
        return commandes;
    }
    
    
    public void DeleteCommand(Command c) {
        try {
            String request="DELETE FROM cmd WHERE IdCmd = ?";
            PreparedStatement pre = cnx.prepareStatement(request);
            pre.setLong(1, c.getIdCmd());
            pre.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
            
    public void UpdateCommand (Command c){
        try {
            String request="UPDATE cmd SET IdCmd = ? , IdProd = ? , client_id = ? , DesCmd = ? , CmdDate = ? , DlvrDate = ? , CmdTotal = ? , CmdStatus = ? , DlvrStatus = ?";
            PreparedStatement pre=cnx.prepareStatement(request);
            pre.setLong(1, c.getIdCmd());
            pre.setLong(2, c.getIdProd());
            pre.setLong(3, c.getClient_id());
            pre.setString(4, c.getDesCmd());            
            pre.setDate(5, c.getCmdDate());
            pre.setDate(6, c.getDlvrDate());
            pre.setLong(7, (long) c.getCmdTotal());
            pre.setString(8, c.getCmdStatus());
            pre.setString(9, c.getDlvrStatus());
            pre.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
}
