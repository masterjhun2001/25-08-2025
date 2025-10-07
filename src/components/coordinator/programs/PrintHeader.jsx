import React from 'react';
import PropTypes from 'prop-types';
import './professional-print-styles.css';

const PrintHeader = ({ 
  title, 
  subtitle, 
  documentType, 
  generatedDate, 
  programTitle, 
  department = "Municipal Agriculture Office - Opol"
}) => {
  const formatDate = (dateString) => {
    if (!dateString) return 'Not specified';
    try {
      return new Date(dateString).toLocaleDateString('en-PH', {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
      });
    } catch {
      return dateString;
    }
  };

  return (
    <div className="print-header">
      {/* Official Letterhead */}
      <div className="official-letterhead">
        <div className="letterhead-header">
          <div className="logo-section">
            <img src="/static/images/logo/mao-logo.png" alt="MAO Logo" className="official-logo" />
          </div>
          <div className="title-section">
            <h1>MUNICIPAL AGRICULTURE OFFICE</h1>
            <h2>OPOL, MISAMIS ORIENTAL</h2>
            <p className="office-address">Province of Misamis Oriental, Philippines</p>
          </div>
          <div className="logo-section">
            <img src="/static/images/logo/opol-logo.png" alt="Opol Logo" className="official-logo" />
          </div>
        </div>
        <div className="letterhead-divider" />
      </div>

      {/* Document Title */}
      <div className="document-title">
        <h1 className="print-header-title">{title}</h1>
        {subtitle && (
          <p className="print-header-subtitle">{subtitle}</p>
        )}
      </div>

      {/* Document Information */}
      <div className="print-header-info">
        <div className="print-header-info-item">
          <span className="print-header-info-label">Document Type:</span>
          <span className="print-header-info-value">{documentType}</span>
        </div>
        <div className="print-header-info-item">
          <span className="print-header-info-label">Generated Date:</span>
          <span className="print-header-info-value">{formatDate(generatedDate)}</span>
        </div>
        <div className="print-header-info-item">
          <span className="print-header-info-label">Program:</span>
          <span className="print-header-info-value">{programTitle}</span>
        </div>
        <div className="print-header-info-item">
          <span className="print-header-info-label">Department:</span>
          <span className="print-header-info-value">{department}</span>
        </div>
      </div>
    </div>
  );
};

PrintHeader.propTypes = {
  title: PropTypes.string.isRequired,
  subtitle: PropTypes.string,
  documentType: PropTypes.string.isRequired,
  generatedDate: PropTypes.string.isRequired,
  programTitle: PropTypes.string.isRequired,
  department: PropTypes.string
};

export default PrintHeader;