import service from '../resources/service';
import {RECEIVE_SERVICES} from './mutation-types';

export const fetchServices = ({dispatch}) => {
    service.fetch(s => {
        dispatch(RECEIVE_SERVICES, s)
    })
};