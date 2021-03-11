/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaces;

import Entities.Packages;

/**
 *
 * @author aziz
 */
public interface IServicePackages {
    
    public void addPacks(Packages P);
    public void updatePacks(Packages P);
    public void deletePacks(Packages P);
}
