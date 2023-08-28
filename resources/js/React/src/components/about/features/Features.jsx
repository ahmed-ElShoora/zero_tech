import React from 'react'
import { useSelector } from 'react-redux';
import { API_URL } from '../../../config';
import Feat from './Feat'

function Features ({ feats }) {
      const { about } = useSelector((state) => state.staticData.data);

   return (
      <div className='features'>
         <h2 className="title">{about.titleFeat}</h2>
         <div className="content">
            {
               feats.map((feat, i) => {
                  return <Feat title={feat.title} img={`${API_URL}/${feat.image}`} key={i} />;
               })
            }
         </div>
      </div>
   )
}

export default Features