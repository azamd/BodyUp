/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaces;

import Entities.Diets;

/**
 *
 * @author aziz
 */
public interface IServiceDiets {
 
    public void addDiets(Diets D);
    public void updateDiets(Diets D);
    public void deleteDiets(Diets D);
       
}
