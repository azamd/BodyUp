/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Entities;

import java.sql.Date;

/**
 *
 * @author Shayma CHAIBI
 */
public class Command {

    
    private int IdCmd;
    private int IdProd;
    private int client_id;
    private String DesCmd;
    private Date CmdDate;
    private Date DlvrDate;
    private float CmdTotal;
    private String CmdStatus;
    private String DlvrStatus;
    
    public Command() {
        super();
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
   
    
    public Command(int IdCmd, int IdProd, int client_id, String DesCmd, Date CmdDate, Date DlvrDate, float CmdTotal, String CmdStatus, String DlvrStatus) {
        this.IdCmd = IdCmd;
        this.IdProd = IdProd;
        this.client_id = client_id;
        this.DesCmd = DesCmd;
        this.CmdDate = CmdDate;
        this.DlvrDate = DlvrDate;
        this.CmdTotal = CmdTotal;
        this.CmdStatus = CmdStatus;
        this.DlvrStatus = DlvrStatus;
    }

    public int getIdCmd() {
        return IdCmd;
    }

    public int getIdProd() {
        return IdProd;
    }

    public int getClient_id() {
        return client_id;
    }

    public String getDesCmd() {
        return DesCmd;
    }

    public Date getCmdDate() {
        return CmdDate;
    }

    public Date getDlvrDate() {
        return DlvrDate;
    }

    public float getCmdTotal() {
        return CmdTotal;
    }

    public String getCmdStatus() {
        return CmdStatus;
    }

    public String getDlvrStatus() {
        return DlvrStatus;
    }
    
    public void setIdCmd(int IdCmd) {
        this.IdCmd = IdCmd;
    }

    public void setIdProd(int IdProd) {
        this.IdProd = IdProd;
    }

    public void setClient_id(int client_id) {
        this.client_id = client_id;
    }

    public void setDesCmd(String DesCmd) {
        this.DesCmd = DesCmd;
    }

    public void setCmdDate(Date CmdDate) {
        this.CmdDate = CmdDate;
    }

    public void setDlvrDate(Date DlvrDate) {
        this.DlvrDate = DlvrDate;
    }

    public void setCmdTotal(float CmdTotal) {
        this.CmdTotal = CmdTotal;
    }

    public void setCmdStatus(String CmdStatus) {
        this.CmdStatus = CmdStatus;
    }

    public void setDlvrStatus(String DlvrStatus) {
        this.DlvrStatus = DlvrStatus;
    }

    public void setName(String string) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
