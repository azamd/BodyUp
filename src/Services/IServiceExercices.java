/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Services;

import Entities.Exercices;
import javafx.collections.ObservableList;

/**
 *
 * @author aziz
 */
public interface IServiceExercices {
    
    public void addExercices(Exercices E);
    public void updateExercices(Exercices E);
    public void deleteExercices(Exercices E);
    //public ObservableList<Exercices> getExList();
    //public void displayExercices();
}
