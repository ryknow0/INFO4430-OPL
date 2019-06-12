using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace OremLibrary.Models
{
    public class Employee
    {
        public virtual int EmployeeId { get; set; }
        public virtual int EventId { get; set; }
        public virtual int ReportId { get; set; }
        public virtual string FirstName { get; set; }
        public virtual string LastName { get; set; }
        public virtual Event Event { get; set; }
        public virtual Report Report { get; set; }
        public List<Event> Events { get; set; }

    }
    }