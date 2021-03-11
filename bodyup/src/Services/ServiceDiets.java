/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Diets;
import Interfaces.IServiceDiets;
import Utils.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author aziz
 */
public class ServiceDiets implements IServiceDiets{
 
    
     public List<Diets> getDtList() {
        
        List<Diets> dtList = new ArrayList();
 
        try{
            
                   String query="SELECT * FROM diet";
        Statement st;
        ResultSet rs;
       
         st= MyConnection.getInstance().getCnx().createStatement(); 
           
         rs=st.executeQuery(query);
         
         
         while(rs.next()){
          Diets D = new Diets();
         
               
              
           
               
           
                D.setName(rs.getString("name"));
                D.setDescription(rs.getString("description"));
                D.setCalories(rs.getInt("calories"));
                D.setPkg_id(rs.getInt("pkg_id"));
                D.setDt_id(rs.getInt("dt_id"));
                
               
                
                
               
               
               
            dtList.add(D);
               
         }
        
        }
        catch(SQLException e){
        
       System.out.println(e.getMessage());
        
        }
         return dtList;
    
    }
    
    

    
     @Override
    public void addDiets(Diets D) {
     try {
            String query= "INSERT INTO `diet`(`name`,`description`,`calories`) VALUES ('"+D.getName()+"','"+D.getDescription()+"','"+D.getCalories()+"')";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            
          
            pst.executeUpdate();
            
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }     
    }

    @Override
    public void updateDiets(Diets D) {
       try {
            String query = "UPDATE `diet` SET `description`='"+D.getDescription()+"',`calories`='"+D.getCalories()+"' WHERE name ='"+D.getName()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
          
            
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }   
    }

    @Override
    public void deleteDiets(Diets D) {
        try {
            String query = "DELETE FROM `diet` WHERE name='"+D.getName()+"'";
            PreparedStatement pst = MyConnection.getInstance().getCnx()
                    .prepareStatement(query);
            //pst.setString(1, E.getEx_id());
            pst.executeUpdate();
            
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }    
    }

    /**
     *
     * @return
     * @throws SQLException
     */
    public List<Diets> displayDiets() throws SQLException {
         
        List<Diets> Dts = new ArrayList<>();
            Statement st =MyConnection.getInstance().getCnx().createStatement();
        String query="SELECT * FROM `diet`";
        ResultSet rs= st.executeQuery(query);
        
       
        while(rs.next()){
        Diets D = new Diets();
        D.setDt_id(rs.getInt("dt_id"));
        D.setName(rs.getString("name"));
        Dts.add(D);
        
        
        
        
    }return Dts;

    
    
}

    
    
    
    
}
